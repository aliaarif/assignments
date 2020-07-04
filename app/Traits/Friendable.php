<?php 

namespace App\Traits;

use App\Friendship;
use App\User;

trait Friendable {


    public function add_friend($requested){
        if($this->id === $requested){
            return 0;
        }

        if($this->is_friends_with($requested) === 1){
            return response()->json(['status' => 'Already friends'], 501);
        }


        if($this->has_pending_friend_request_to($requested) === 1){
            return response()->json(['status' => 'Already sent a friend request'], 501);
        }

        if($this->has_pending_friend_request_from($requested) === 1){
            return $this->accept_friend($requested);
        }


        $friendship = Friendship::create([
            'requester' => $this->id,
            'requested' => $requested
        ]);

        if($friendship){
            return response()->json($friendship, 200);
        }else{
            return response()->json('Fail', 501);
        }
    }

    public function accept_friend($requester){

        if($this->has_pending_friend_request_from($requester) === 0){
            return 0;
        }

        $friendship = Friendship::where('requester', $requester)
        ->where('requested', $this->id)->first();
        if($friendship){ 
            $friendship->update(['status' => true]);
            return response()->json('Ok', 200);
        }else{
            return response()->json('Fail', 501);
        }
    }


    public function friends(){
        $friends1 = [];

        $f1 = Friendship::where('status', true)
        ->where('requester', $this->id)
        ->get();
        foreach($f1 as $friendship){
            array_push($friends1, User::find($friendship->requested));
        }



        $friends2 = [];
        $f2 = Friendship::where('status', true)
        ->where('requested', $this->id)
        ->get();
        foreach($f2 as $friendship){
            array_push($friends2, User::find($friendship->requester));
        }

        return array_merge($friends1, $friends2);

    }

    public function pending_friend_requests(){
        $users = [];

        $friendships = Friendship::where('status', false)
        ->where('requested', $this->id)
        ->get();

        foreach ($friendships as  $friendship){
            array_push($users, User::find($friendship->requester));
        }


        return $users;
    }

    public function friends_ids(){
        return collect($this->friends())->pluck('id');
    }

    public function is_friends_with($user_id){
        if(in_array($user_id, $this->friends_ids()->toArray())){
            return 1;
        }else{
            return 0;
        }

    }

    public function pending_friend_requests_ids(){
        return collect($this->pending_friend_requests_ids())->pluck('id')->toArray();
    }

    public function pending_friend_request_sent(){
        $users = [];

        $friendships = Friendship::where('status', false)
        ->where('requester', $this->id)
        ->get();

        foreach ($friendships as  $friendship){
            array_push($users, User::find($friendship->requested));
        }


        return $users;
    }

    public function pending_friend_requests_sent_ids(){
        return collect($this->pending_friend_request_sent())->pluck('id')->toArray();
    }

    public function has_pending_friend_request_from($user_id){
        if(in_array($user_id, $this->pending_friend_requests_ids()->toArray())){
            return 1;
        }else{
            return 0;
        }
    }


    public function has_pending_friend_request_to($user_id){
        if(in_array($user_id, $this->pending_friend_requests_sent_ids()->toArray())){
            return 1;
        }else{
            return 0;
        }
    }

}