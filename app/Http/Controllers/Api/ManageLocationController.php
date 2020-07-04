<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Candidate;
use App\State;
use App\District;
use App\City;
use App\Locality;
use Auth;
use Hash;


class ManageLocationController extends Controller
{
    public function getStates(Request $request)
    {
        $states =  State::where('country_id', 101)->whereIn('id', [10, 13, 33])->orderBy('id', 'asc')->get(['name']);
        $data = ['states' => $states];
        return response()->json(['locations' => $data], 200);
    }
    
    public function getCities(Request $request, $state_name = null)
    {
        if($state_name){
            $state =  State::where('name', $state_name)->first();
            if($state){
                $cities = City::where('state_id', $state->id)->get(['name']);     
            }else{
                $cities = [];    
            }            
        }else{
            $cities = [];
        }
        $data = [
            'districts' => $cities
        ];
        return response()->json(['locations' => $data], 200); 
    }
    
    
    public function listCities(Request $request)
    {
        $cities = City::whereIn('state_id', [10, 13, 33])->with(['country', 'state'])->orderBy('id', 'desc')->paginate(30);     
        return response()->json($cities); 
    }
    
    
    public function loadLocalities(Request $request, $city = null)
    {
        if($city){
            $city =  ucwords(str_replace('-', ' ', $city));
            
            $cityId = City::where('name', $city)->first();
            
            $localities = Locality::where('city_id',  $cityId->id)->get(['name', 'seo']);
            return response()->json(['localities' => $localities], 200);          
        }else{
            $localities = Candidate::groupBy('city')->get(['city']);        
            return response()->json(['localities' => $localities], 200);  
        }
    }
    
    public function loadCandidates(Request $request, $city)
    {
        $city =  ucwords(str_replace('-', ' ', $city));
        $candidates = Candidate::where('city', 'LIKE', '%'.$city.'%')->orderBy('name', 'asc')->paginate(6);     
        return response()->json($candidates); 
    }
    
    public function loadLocalitiesFilters(Request $request, $city)
    {
        $city =  ucwords(str_replace('-', ' ', $city));
        $cityIds = City::where('name', 'LIKE', '%'.$city.'%')->pluck('id');
        $localities = Locality::whereIn('city_id',  $cityIds)->orderBy('name', 'asc')->get();     
        return response()->json($localities); 
    }
    
    public function filteredCandidates(Request $request, $filters)
    {
        $filteredCandidates = Candidate::where('name', 'LIKE', '%'.$filters.'%')->paginate(30);
        return response()->json($filteredCandidates); 
        
        $candidates = Candidate::whereIn('name', 'LIKE', '%'.$filters.'%')->orderBy('name', 'asc')->paginate(30);     
        
        return response()->json($candidates); 
    }
    
    public function store(Request $request)
    {
        $state = State::where('name', $request->state_name)->first();
        if($state){
            $city = City::create([
                'name' => $request->city_name,
                'state_id' => $state->id,
                ]);   
                return response()->json(['city' => $city], 200); 
            }else{
                $state = State::create([
                    'name' => $request->state_name,
                    'country_id' => 101,
                    ]);    
                    return response()->json(['state' => $state], 200);
                }
            }
            
            public function show($searchTerm)
            {
                $cities = City::where('name', 'LIKE', "%$searchTerm%")->paginate();
                return response()->json(['districts' => $cities], 200);
            }
            
            public function update(Request $request, $id)
            {
                $request->validate([
                    'name' => 'required'
                    ]);
                    
                    $city = City::find($id);
                    $city->name = $request->city_name;
                    $city->save();
                    return response()->json(['city' => $city], 200);
                }
                
                public function destroy($id)
                {
                    $city = City::find($id)->delete();
                    return response()->json(['city' => $city], 200);
                }
                
                public function deleteAll(Request $request)
                {
                    $city = City::whereIn('id', $request->cities)->delete();
                    return response()->json(['message' => 'Records deleted successfully!'], 200);
                }
                
                
                
            }
            