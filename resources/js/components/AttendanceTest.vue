<template>
  <div v-if="mainContentsViews == 'Student'">
    <div class="section" id="user-profile">
      <div class="row">
        <!-- User Profile Feed -->
        <div class="col s12 m4 l3 user-section-negative-margin">
          <div class="row">
            <div class="col s12 center-align">
              <img id="prifile-image" class="responsive-img circle z-depth-5" width="200" :src="bURL+this.$parent.user.avatar" alt="">
              <br>
              <a class="waves-effect waves-light btn mt-5 border-radius-4"> Follow</a>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col s6">
              <h6>Follower</h6>
              <h5 class="m-0"><a href="#">540</a></h5>
            </div>
            <div class="col s6">
              <h6>Following</h6>
              <h5 class="m-0"><a href="#">128</a></h5>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col s12">
              <p class="m-0">Performance</p>
              <p class="m-0"><a href="#">56</a> and <a href="#">42</a> remainContentsViews</p>
            </div>
          </div>
          <hr>
          <div class="row user-projects">
            <h6 class="col s12">Projects</h6>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/35.png'">
            </div>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/36.png'">
            </div>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/37.png'">
            </div>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/38.png'">
            </div>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/39.png'">
            </div>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/40.png'">
            </div>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/41.png'">
            </div>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/42.png'">
            </div>
            <div class="col s4">
              <img class="responsive-img photo-border mt-10" alt="" :src="bURL+'images/gallery/43.png'">
            </div>
          </div>
          <hr class="mt-5">
          <div class="row">
            <div class="col s12">
              <h6>Boosts</h6>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col s2 mt-2 pr-0 circle">
              <a href="#"><img class="responsive-img circle" :src="bURL+'images/user/1.jpg'" alt=""></a>
            </div>
            <div class="col s9">
              <a href="#">
                <p class="m-0">Micheal S. Castilleja</p>
              </a>
              <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                <span class="material-icons star-width">star_rate</span></p>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col s2 mt-2 pr-0 circle">
                <a href="#"><img class="responsive-img circle" :src="bURL+'images/user/11.jpg'" alt=""></a>
              </div>
              <div class="col s9">
                <a href="#">
                  <p class="m-0">Thomas A. Carranza</p>
                </a>
                <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                  <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                  <span class="material-icons star-width">star_rate</span></p>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col s2 mt-2 pr-0 circle">
                  <a href="#"><img class="responsive-img circle" :src="bURL+'images/user/5.jpg'" alt=""></a>
                </div>
                <div class="col s9">
                  <a href="#">
                    <p class="m-0">Micheal Bryant</p>
                  </a>
                  <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                    <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                    <span class="material-icons star-width">star_rate</span></p>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col s2 mt-2 pr-0 circle pb-2">
                    <a href="#"><img class="responsive-img circle" :src="bURL+'images/user/8.jpg'" alt=""></a>
                  </div>
                  <div class="col s9">
                    <a href="#">
                      <p class="m-0">Wiley J. Bryant</p>
                    </a>
                    <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                      <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                      <span class="material-icons star-width">star_rate</span></p>
                    </div>
                  </div>
                </div>
                <!-- User Post Feed -->
                <div class="col s12 m8 l9">
                  <div class="row">
                    <div class="card user-card-negative-margin z-depth-0" id="feed">
                      <div class="card-content card-border-gray">
                        <div class="row">
                          <div class="col s12">
                            <h5>Suzanne Martin</h5>
                            <p>Senior Designer 
                              <span class="amber-text">
                                <span class="material-icons star-width vertical-align-middle">star_rate</span>
                                <span class="material-icons star-width vertical-align-middle">star_rate</span> <span class="material-icons star-width vertical-align-middle">star_rate</span>
                                <span class="material-icons star-width vertical-align-middle">star_rate</span> <span class="material-icons star-width vertical-align-middle">star_rate</span></span></p>
                              </div>
                            </div>
                            <div class="row mt-2">
                              <div class="col s12">
                                <ul class="tabs tabs-style card-border-gray">
                                  <li class="tab tab-style col m4 s6"><a class="active" href="javascript:;" @click="tab('Studies')">
                                    <i class="material-icons vertical-align-middle">crop_portrait</i> Studies
                                  </a></li>
                                  <li class="tab tab-style col m4 s6"><a class="" href="javascript:;" @click="tab('Socials')">
                                    <i class="material-icons vertical-align-middle">bookmark_border</i> Socials
                                  </a></li>
                                  <li class="tab tab-style col m4 s6"><a class="" href="javascript:;" @click="tab('MPS')">
                                    <i class="material-icons vertical-align-middle">date_range</i> MPS
                                  </a></li>
                                </ul>
                              </div>
                            </div>
                            <!--    <div class="input-field col s12">
                              <i class="material-icons prefix">question_answer</i>
                              <textarea id="comment" class="materialize-textarea"></textarea>
                              <label for="comment" class="">Write a comment...</label>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                  <i class="material-icons right">send</i>
                                </button>
                              </div>
                            </div> -->
                            <div id="test1"  v-if="tabID == 'Studies'" class="active row mt-3 mb-4" v-for="post in posts.data">
                              <div class="col s1 pr-0 circle">
                                <a href="#"><img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt=""></a>
                              </div>
                              <div class="col s11">
                                <a href="#">
                                  <p class="m-0">{{ post.created_by }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ post.created_at }}</span></p>
                                </a>
                                <div class="row">
                                  <div class="col s12">
                                   <form v-on:submit.prevent="noop">
                                    <div class="card card-border z-depth-2">
                                      <div class="card-image">
                                        <img :src="bURL+post.image" alt="">
                                      </div>
                                      <div class="card-content">
                                        <h6 class="font-weight-900 text-uppercase"><a href="#">{{ post.title }}</a></h6>
                                        <p>{{ post.body }}</p>
                                        <hr class="mt-4" />
                                        <div class="row valign-wrapper mt-4" v-for="comment in post.comments">
                                          <div class="col s1 pr-0 circle">
                                            <img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt="">
                                          </div>
                                          <div class="col s11">
                                            <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ comment.name }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ comment.created_at }}</span></p>
                                            <p class="m-0 chat-text">{{ comment.comment }}</p>
                                          </div>
                                        </div>
                                        <div class="input-field col s12">
                                          <input type="hidden"  v-model="form.post"  value="post">
                                          <input type="hidden"  v-model="form.post_id"  value="post.id">
                                          <input type="hidden"  v-model="form.user" value="user">
                                          <i class="material-icons prefix">question_answer</i>
                                          <textarea v-if="commentBoxID == post.id" :id="'comment-'+post.id" class="materialize-textarea" v-model="form.comment" v-on:keydown="setPost(post)"  v-on:keyup="validateComment"></textarea>
                                          <textarea v-else :id="'comment-'+post.id" class="materialize-textarea"  v-on:keydown="setPost(post)"></textarea>
                                          <label :for="'comment-'+post.id" class="">Write a comment...</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="social-icon">
                                      <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                                      15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div id="test2"  v-if="tabID == 'Socials'" class="active row mt-3 mb-4" v-for="post in posts.data">
                            <div class="col s1 pr-0 circle">
                              <a href="#"><img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt=""></a>
                            </div>
                            <div class="col s11">
                              <a href="#">
                                <p class="m-0">{{ post.created_by }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ post.created_at }}</span></p>
                              </a>
                              <div class="row">
                                <div class="col s12">
                                  <div class="card card-border z-depth-2">
                                    <div class="card-image">
                                      <img :src="bURL+post.image" alt="">
                                    </div>
                                    <div class="card-content">
                                      <h6 class="font-weight-900 text-uppercase"><a href="#">Designing Services</a></h6>
                                      <p>{{ post.body }}</p>
                                      <hr class="mt-4" />
                                      <div class="row valign-wrapper mt-4" v-for="comment in post.comments">
                                        <div class="col s1 pr-0 circle">
                                          <img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt="">
                                        </div>
                                        <div class="col s11">
                                          <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ comment.name }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ comment.created_at }}</span></p>
                                          <p class="m-0 chat-text">{{ comment.comment }}</p>
                                        </div>
                                      </div>
                                      <div class="input-field col s12">
                                        <input type="hidden"  v-model="form.post"  value="post">
                                        <input type="hidden"  v-model="form.post_id"  value="post.id">
                                        <input type="hidden"  v-model="form.user" value="user">
                                        <i class="material-icons prefix">question_answer</i>
                                        <textarea v-if="commentBoxID == post.id" :id="'comment-'+post.id" class="materialize-textarea" v-model="form.comment" v-on:keydown="setPost(post)"  v-on:keyup="validateComment"></textarea>
                                        <textarea v-else :id="'comment-'+post.id" class="materialize-textarea"  v-on:keydown="setPost(post)"></textarea>
                                        <label :for="'comment-'+post.id" class="">Write a comment...</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="social-icon">
                                    <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                                    15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div id="test3"  v-if="tabID == 'MPS'" class="active row mt-3 mb-4" v-for="post in posts.data">
                            <div class="col s1 pr-0 circle">
                              <a href="#"><img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt=""></a>
                            </div>
                            <div class="col s11">
                              <a href="#">
                                <p class="m-0">{{ post.created_by }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ post.created_at }}</span></p>
                              </a>
                              <div class="row">
                                <div class="col s12">
                                  <div class="card card-border z-depth-2">
                                    <div class="card-image">
                                      <img :src="bURL+post.image" alt="">
                                    </div>
                                    <div class="card-content">
                                      <h6 class="font-weight-900 text-uppercase"><a href="#">Designing Services</a></h6>
                                      <p>{{ post.body }}</p>
                                      <hr class="mt-4" />
                                      <div class="row valign-wrapper mt-4" v-for="comment in post.comments">
                                        <div class="col s1 pr-0 circle">
                                          <img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt="">
                                        </div>
                                        <div class="col s11">
                                          <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ comment.name }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ comment.created_at }}</span></p>
                                          <p class="m-0 chat-text">{{ comment.comment }}</p>
                                        </div>
                                      </div>
                                      <div class="input-field col s12">
                                        <input type="hidden"  v-model="form.post"  value="post">
                                        <input type="hidden"  v-model="form.post_id"  value="post.id">
                                        <input type="hidden"  v-model="form.user" value="user">
                                        <i class="material-icons prefix">question_answer</i>
                                        <textarea v-if="commentBoxID == post.id" :id="'comment-'+post.id" class="materialize-textarea" v-model="form.comment" v-on:keydown="setPost(post)"  v-on:keyup="validateComment"></textarea>
                                        <textarea v-else :id="'comment-'+post.id" class="materialize-textarea"  v-on:keydown="setPost(post)"></textarea>
                                        <label :for="'comment-'+post.id" class="">Write a comment...</label>
                                      </div>


                                    </div>
                                  </div>
                                  <div class="social-icon">
                                    <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                                    15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <vue-pagination :pagination="posts"
                          @paginate="getPosts"
                          :offset="4">
                        </vue-pagination>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div v-else-if="mainContentsViews == 'Teacher'">

            <div class="section mt-1" id="user-profile">
              <div class="row">


                <!-- User Profile Feed -->
                <div class="col s12 m4 l3 ">


                  <h6>Select a attendance date</h6>
                  <md-datepicker  v-model="attendanceDate" md-immediately />


                  <h6>Select a attendance type</h6>
                  <p>
                    <label>
                      <input name="attendanceType"  type="radio" checked>
                      <span>Staff</span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input name="attendanceType" type="radio">
                      <span>Students</span>
                    </label>
                  </p>

                  <div class="row" v-if="attendanceType == 'Students'">
                    <div class="col s12">
                      <h6 class="bbb">Select a Standard</h6>

                      <p>
                        <label>
                          <input name="attendanceStandard"   type="radio" checked>
                          <span>Standard 1</span>
                        </label>
                      </p>

                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>


                      <p>
                        <label>
                          <input name="attendanceStandard"  type="radio" >
                          <span>Standard 1</span>
                        </label>
                      </p>

                    </div>
                  </div>

                </div>
                <!-- User Post Feed -->
                <div class="col s12 m8 l9">
                  <div class="row">
                    <div class="card user-card-negative-margin z-depth-0" id="feed">
                      <div class="card-content card-border-gray">

                        <div class="row">
                          <div class="col s12">
                            <ul class="tabs tabs-style card-border-gray">
                              <li class="tab tab-style col s6"><a class="active" href="javascript:;" @click="tab('Studies')">
                                <i class="material-icons vertical-align-middle">crop_portrait</i> Staffs
                              </a></li>
                              <li class="tab tab-style col s6"><a class="" href="javascript:;" @click="tab('Socials')">
                                <i class="material-icons vertical-align-middle">bookmark_border</i> Students
                              </a></li>

                            </ul>
                          </div>
                        </div>
                        <div id="test1"  v-if="tabID == 'Studies'" class="active row mt-3 mb-4" v-for="post in posts.data">
                          <div class="col s12">
                            <div class="card card-border z-depth-2">
                              <div class="card-image">
                                <img :src="bURL+post.image" alt="">
                              </div>
                              <div class="card-content">
                                <h6 class="font-weight-900 text-uppercase"><a href="#">{{ post.title }}</a></h6>
                                <p>{{ post.body }}</p>
                                <hr class="mt-4" />
                                <div class="row valign-wrapper mt-4" v-for="comment in post.comments">
                                  <div class="col s1 pr-0 circle">
                                    <img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt="">
                                  </div>
                                  <div class="col s11">
                                    <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ comment.name }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ comment.created_at }}</span></p>
                                    <p class="m-0 chat-text">{{ comment.comment }}</p>
                                  </div>
                                </div>
                                <div class="input-field col s12">
                                  <input type="hidden"  v-model="form.post"  value="post">
                                  <input type="hidden"  v-model="form.post_id"  value="post.id">
                                  <input type="hidden"  v-model="form.user" value="user">
                                  <i class="material-icons prefix">question_answer</i>
                                  <textarea v-if="commentBoxID == post.id" :id="'comment-'+post.id" class="materialize-textarea" v-model="form.comment" v-on:keydown="setPost(post)"  v-on:keyup="validateComment"></textarea>
                                  <textarea v-else :id="'comment-'+post.id" class="materialize-textarea"  v-on:keydown="setPost(post)"></textarea>
                                  <label :for="'comment-'+post.id" class="">Write a comment...</label>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>


                        <div id="test2"  v-if="tabID == 'Socials'" class="active row mt-3 mb-4" v-for="post in posts.data">
                          <div class="col s1 pr-0 circle">
                            <a href="#"><img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt=""></a>
                          </div>
                          <div class="col s11">
                            <a href="#">
                              <p class="m-0">{{ post.created_by }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ post.created_at }}</span></p>
                            </a>
                            <div class="row">
                              <div class="col s12">
                                <div class="card card-border z-depth-2">
                                  <div class="card-image">
                                    <img :src="bURL+post.image" alt="">
                                  </div>
                                  <div class="card-content">
                                    <h6 class="font-weight-900 text-uppercase"><a href="#">Designing Services</a></h6>
                                    <p>{{ post.body }}</p>
                                    <hr class="mt-4" />
                                    <div class="row valign-wrapper mt-4" v-for="comment in post.comments">
                                      <div class="col s1 pr-0 circle">
                                        <img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt="">
                                      </div>
                                      <div class="col s11">
                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ comment.name }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ comment.created_at }}</span></p>
                                        <p class="m-0 chat-text">{{ comment.comment }}</p>
                                      </div>
                                    </div>
                                    <div class="input-field col s12">
                                      <input type="hidden"  v-model="form.post"  value="post">
                                      <input type="hidden"  v-model="form.post_id"  value="post.id">
                                      <input type="hidden"  v-model="form.user" value="user">
                                      <i class="material-icons prefix">question_answer</i>
                                      <textarea v-if="commentBoxID == post.id" :id="'comment-'+post.id" class="materialize-textarea" v-model="form.comment" v-on:keydown="setPost(post)"  v-on:keyup="validateComment"></textarea>
                                      <textarea v-else :id="'comment-'+post.id" class="materialize-textarea"  v-on:keydown="setPost(post)"></textarea>
                                      <label :for="'comment-'+post.id" class="">Write a comment...</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="social-icon">
                                  <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                                  15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <vue-pagination :pagination="posts"
                        @paginate="getPosts"
                        :offset="4">
                      </vue-pagination>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div v-else>
          <div class="section mt-1" id="user-profile">
            <div class="row">
              <div class="col s12 m4 l3 ">
                <div class="row mt-4">
                  <div class="col s12">

                    <h6>Select a attendance date</h6>
                    <md-datepicker  v-model="attendanceDate" md-immediately />
                  </div>
                </div>



                <div class="row mt-4 mb-5">
                  <div class="col s12">
                    <h6>Select a attendance type</h6>
                    <br/>
                    <label class="mt-2">
                      <input
                      type="radio"
                      @click="changeAttendanceType('Staff')"
                      id="Staff"
                      data-id="Staff"
                      data-attendance-type="Staff"
                      name="Staff"
                      value="Staff"
                      class="attendance-type"
                      v-if="attendanceType == 'Staff'" 
                      checked
                      />
                      <input
                      type="radio"
                      @click="changeAttendanceType('Staff')"
                      id="Staff"
                      data-id="Staff"
                      data-attendance-type="Staff"
                      name="Staff"
                      value="Staff"
                      class="attendance-type"
                      v-else
                      />
                      <span>Staff</span>
                    </label>
                    <label class="mt-2">
                      <input
                      type="radio"
                      @click="changeAttendanceType('Students')"
                      id="Students"
                      data-id="Students"
                      data-attendance-type="Students"
                      name="Students"
                      value="Students"
                      class="attendance-type"
                      v-if="attendanceType == 'Students'" 
                      checked
                      />
                      <input
                      type="radio"
                      @click="changeAttendanceType('Students')"
                      id="Students"
                      data-id="Students"
                      data-attendance-type="Students"
                      name="Students"
                      value="Students"
                      class="attendance-type"
                      v-else
                      />
                      <span>Students</span>
                    </label>
                  </div>
                </div>

                <div class="row  mb-5" v-if="attendanceType == 'Students'">
                  <div class="col s12">

                    <h6>Select a Standard</h6>

                    <label
                    class="mt-1"
                    v-for="standard in standards"
                    >
                    <input
                    type="checkbox"
                    v-model="theBrothers"
                    @click="changeStandard(standard.id)"
                    :id="standard.id"
                    :data-id="standard.id"
                    :data-standard="standard.id"
                    :name="standard.standard_name.replace(' ', '-')"
                    :value="standard.id"
                    class="standard"
                    :ref="standard.standard_name.replace(' ', '-')"
                    />
                    <span>{{ standard.standard_name }}</span>
                    &nbsp;&nbsp;&nbsp;
                  </label>



                </div>
              </div>

            </div>
            <!-- User Post Feed -->
            <div class="col s12 m8 l9">
              <div class="row">
                <div class="card user-card-negative-margin z-depth-0" id="feed">
                  <div class="card-content card-border-gray">

                    <div class="row">
                      <div class="col s12">
                        <ul class="tabs tabs-style card-border-gray">
                          <li class="tab tab-style col s6"><a class="active" href="javascript:;" @click="tab('Studies')">
                            <i class="material-icons vertical-align-middle">crop_portrait</i> Staffs
                          </a></li>
                          <li class="tab tab-style col s6"><a class="" href="javascript:;" @click="tab('Socials')">
                            <i class="material-icons vertical-align-middle">bookmark_border</i> Students
                          </a></li>

                        </ul>
                      </div>
                    </div>
                    <div id="test1"  v-if="tabID == 'Studies'" class="active row mt-3 mb-4" v-for="post in posts.data">
                      <div class="col s12">
                        <div class="card card-border z-depth-2">
                          <div class="card-image">
                            <img :src="bURL+post.image" alt="">
                          </div>
                          <div class="card-content">
                            <h6 class="font-weight-900 text-uppercase"><a href="#">{{ post.title }}</a></h6>
                            <p>{{ post.body }}</p>
                            <hr class="mt-4" />
                            <div class="row valign-wrapper mt-4" v-for="comment in post.comments">
                              <div class="col s1 pr-0 circle">
                                <img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt="">
                              </div>
                              <div class="col s11">
                                <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ comment.name }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ comment.created_at }}</span></p>
                                <p class="m-0 chat-text">{{ comment.comment }}</p>
                              </div>
                            </div>
                            <div class="input-field col s12">
                              <input type="hidden"  v-model="form.post"  value="post">
                              <input type="hidden"  v-model="form.post_id"  value="post.id">
                              <input type="hidden"  v-model="form.user" value="user">
                              <i class="material-icons prefix">question_answer</i>
                              <textarea v-if="commentBoxID == post.id" :id="'comment-'+post.id" class="materialize-textarea" v-model="form.comment" v-on:keydown="setPost(post)"  v-on:keyup="validateComment"></textarea>
                              <textarea v-else :id="'comment-'+post.id" class="materialize-textarea"  v-on:keydown="setPost(post)"></textarea>
                              <label :for="'comment-'+post.id" class="">Write a comment...</label>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div id="test2"  v-if="tabID == 'Socials'" class="active row mt-3 mb-4" v-for="post in posts.data">
                      <div class="col s1 pr-0 circle">
                        <a href="#"><img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt=""></a>
                      </div>
                      <div class="col s11">
                        <a href="#">
                          <p class="m-0">{{ post.created_by }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ post.created_at }}</span></p>
                        </a>
                        <div class="row">
                          <div class="col s12">
                            <div class="card card-border z-depth-2">
                              <div class="card-image">
                                <img :src="bURL+post.image" alt="">
                              </div>
                              <div class="card-content">
                                <h6 class="font-weight-900 text-uppercase"><a href="#">Designing Services</a></h6>
                                <p>{{ post.body }}</p>
                                <hr class="mt-4" />
                                <div class="row valign-wrapper mt-4" v-for="comment in post.comments">
                                  <div class="col s1 pr-0 circle">
                                    <img class="responsive-img circle" :src="bURL+post.created_by_avatar" alt="">
                                  </div>
                                  <div class="col s11">
                                    <p class="m-0 blue-grey-text text-darken-4 font-weight-700">{{ comment.name }} <span><i class="material-icons vertical-align-bottom">access_time</i> {{ comment.created_at }}</span></p>
                                    <p class="m-0 chat-text">{{ comment.comment }}</p>
                                  </div>
                                </div>
                                <div class="input-field col s12">
                                  <input type="hidden"  v-model="form.post"  value="post">
                                  <input type="hidden"  v-model="form.post_id"  value="post.id">
                                  <input type="hidden"  v-model="form.user" value="user">
                                  <i class="material-icons prefix">question_answer</i>
                                  <textarea v-if="commentBoxID == post.id" :id="'comment-'+post.id" class="materialize-textarea" v-model="form.comment" v-on:keydown="setPost(post)"  v-on:keyup="validateComment"></textarea>
                                  <textarea v-else :id="'comment-'+post.id" class="materialize-textarea"  v-on:keydown="setPost(post)"></textarea>
                                  <label :for="'comment-'+post.id" class="">Write a comment...</label>
                                </div>
                              </div>
                            </div>
                            <div class="social-icon">
                              <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                              15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <vue-pagination :pagination="posts"
                    @paginate="getPosts"
                    :offset="4">
                  </vue-pagination>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  <script>
  import { required, minLength } from "vuelidate/lib/validators";
  import VuePagination from './Pagination.vue';


  export default {
    name: 'Attendance',
    data: () => {
      return {
        attendanceDate: localStorage.getItem("attendanceDate") ? this.convertDate(localStorage.getItem("attendanceDate")) : this.convertDate(new Date()),
        attendanceType: localStorage.getItem("attendanceType") ? localStorage.getItem("attendanceType") : 'Staff',
        standard:localStorage.getItem("standard") ? localStorage.getItem("standard") : 1,
        filtersObj: {},
        standards: {},
        bURL:window.bURL,
        tabID:localStorage.getItem('tab') ? localStorage.getItem('tab') : 'Studies',
        active:'active'+localStorage.getItem('tab'),
        mainContentsViews:'Student',
        posts: {
          total: 0,
          per_page: 2,
          from: 1,
          to: 0,
          current_page: 1
        },
        comments: {},
        commentBoxID: '',
        offset: 4,
        form: {
          post: {},
          post_id:'',
          comment: '',
          user: localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : {}

        },
        //comment:''

      }
    },
    mounted() {
      this.attendanceDate = alocalStorage.getItem("attendanceDate") ? this.convertDate(this.attendanceDate) : this.convertDate(new Date());

//this.convertDate(this.attendanceDate);

     // this.attendanceDate = this.attendanceDate ? this.attendanceDate : new Date(),
     // this.attendanceType = this.attendanceType ? this.attendanceType : 'Staff',
     // this.standard = this.standard ? this.standard : 'Staff',

     //console.log(localStorage.getItem('storeObj'));

     this.tabID = 'Studies';
     this.getStandards();
     this.user = localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : {};



     if(this.user.role == 'Student'){
      this.mainContentsViews = 'Student'
      this.getPosts(this.tabID);
    }else if(this.user.role == 'Teacher'){
      this.mainContentsViews = 'Teacher'
      this.getPosts(this.tabID);
    }else{
      this.mainContentsViews = 'Principal'
      this.getPosts(this.tabID);
    }

    $('#bbb').addClass('animated fadeOut');

  },

  validations: {
    form: {
        //post_body: { required },
        comment: { required }
      }
    },

    components: {
      VuePagination,
    },

    watch:{
      tab: function(tabNew, tabOld){
        localStorage.setItem('tab', tabNew);
        this.tabID  = tabNew;
        this.getPosts(this.tabID);
      },
      setPost: function(postNew, postOld){
       this.commentBoxID = postNew.id;
       this.form.post = JSON.stringify(postNew);
       this.form.post_id = postNew.id;
     },
     attendanceDate: function(attendanceDateNew, attendanceDateOld){
      this.filtersObj.attendanceDate = attendanceDateNew;
      this.attendanceDate = attendanceDateNew;
      this.filtersObj.attendanceType = this.attendanceType;
      this.filtersObj.standard = this.standard;
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj))
      let filters = localStorage.getItem("storeObj");
      //const filters = JSON.parse(localStorage.getItem("storeObj"));
      //console.log(filters);
      this.applyFilters(filters);
    },
    attendanceType: function(attendanceTypeNew, attendanceTypeOld){
      this.filtersObj.attendanceDate = this.attendanceDate;
      this.filtersObj.attendanceType = attendanceTypeNew;
      this.attendanceType = attendanceTypeNew;
      this.filtersObj.standard = this.standard;
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj))
      let filters = localStorage.getItem("storeObj");
      //const filters = JSON.parse(localStorage.getItem("storeObj"));
      //console.log(filters);
      this.applyFilters(filters);
    },
    changeStandard: function(standardNew, standardOld){
      this.filtersObj.attendanceDate = this.attendanceDate;
      this.filtersObj.attendanceType = this.attendanceType;
      this.filtersObj.standard = standardNew;
      this.standard = standardNew;
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj))
      let filters = localStorage.getItem("storeObj");
      //const filters = JSON.parse(localStorage.getItem("storeObj"));
      //console.log(filters);
      this.applyFilters(filters);
    },

  },

  computed: {
    activeTab: function() {
     return this.active ? 'active' : '';
   },
   theBrothers: {
    set(val) {},

    get() {
      this.filters = this.$store.state.theBrothers;
      return this.$store.state.theBrothers;
    }
  }

},

methods:{
  getStandards() {
    axios
    .get(`/api/standards`)
    .then(res => {
      this.standards = res.data.standards;
    })
    .catch(err => {});
  },

  convertDate: function (str) {
  var date = new Date(str),
    mnth = ("0" + (date.getMonth() + 1)).slice(-2),
    day = ("0" + date.getDate()).slice(-2);
  return [date.getFullYear(), mnth, day].join("-");
},

  changeStandard: function(val) {
    $(".standard").prop("checked", false);
    $("#" + val).prop("checked", true);
    this.standard = val;
    localStorage.setItem("standard", this.standard);
    this.filtersObj.attendanceDate = localStorage.getItem("attendanceDate");
    this.filtersObj.attendanceType = localStorage.getItem("attendanceType");
    this.filtersObj.standard = localStorage.getItem("standard");
    localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
    //let filters = localStorage.getItem("storeObj");
    //const filters = JSON.parse(localStorage.getItem("storeObj"));
    //console.log(filters);
    //this.applyFilters(filters);
  },

  changeAttendanceDate: function(val) {
    $(".attendance-date").prop("checked", false);
    $("#" + val).prop("checked", true);
    this.attendanceDate = val;
    localStorage.setItem("attendanceDate", this.attendanceDate);
    this.filtersObj.attendanceDate = localStorage.getItem("attendanceDate");
    this.filtersObj.attendanceType = localStorage.getItem("attendanceType");
    this.filtersObj.standard = localStorage.getItem("standard");
    localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
    //let filters = localStorage.getItem("storeObj");
    //const filters = JSON.parse(localStorage.getItem("storeObj"));
    //console.log(filters);
    //this.applyFilters(filters);
  },

  changeAttendanceType: function(val) {
    this.attendanceType = val;
    $(".attendance-type").prop("checked", false);
    $("#" + val).prop("checked", true);
    this.attendanceType = val;
    localStorage.setItem("attendanceType", this.attendanceType);
    this.filtersObj.attendanceDate = localStorage.getItem("attendanceDate");
    this.filtersObj.attendanceType = localStorage.getItem("attendanceType");
    this.filtersObj.standard = localStorage.getItem("standard");
    localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
    //let filters = localStorage.getItem("storeObj");
    //const filters = JSON.parse(localStorage.getItem("storeObj"));
    //console.log(filters);
    //this.applyFilters(filters);
  },

  validateComment: function(e) {
    this.$v.form.$touch();
    if (e.keyCode === 13) {
      if(this.$v.form.$error){
        if(this.$v.form.comment.$error){
          return;
        }

      }


      var form = new FormData();
      axios.post('/api/comment', {
        'post': this.form.post, 
        'post_id': this.form.post_id, 
        'user': this.form.user, 
        'comment': this.form.comment
      })

      .then((res) => {
        console.log(res.data);
        this.getPosts(this.tabID);
        this.form.comment = '';
      }).catch((err) => {});

    }      

  },

  setPost: function(post){
    this.commentBoxID = post.id;
    this.form.post = JSON.stringify(post);
    this.form.user = JSON.stringify(this.user);
    this.form.post_id = post.id;
  },


  noop: function () {},

  getPosts: function(tabID){
   var tabID = this.tabID;

   if(!tabID){
    tabID = this.tabID;
  }else{
    tabID = tabID;
  }

  axios.get(`/api/get-all-posts/`+tabID+`?page=${this.posts.current_page}`)
  .then((res) => {
    this.posts = res.data.posts;
  }).catch((err) => {});
},


applyFilters: function(filters){
  let allFilters = JSON.parse(filters);
  if(allFilters.attendanceType == 'Staff'){
    alert('Principal take attendance of staff only');
  }else if(allFilters.attendanceType == 'Students'){
    console.log(allFilters.attendanceType);
    alert('Principal take attendance of students only');
  }
},
tab: function(tab){
  localStorage.setItem('tab', tab);
  this.tabID  = tab;
  this.active  = 'active';
  this.getPosts(this.tabID);
},
}
}
</script>
<style lang="stylus" scoped>
</style>
