<div class="comments-area">
    <h4>{{ $totalcomments }} Comments</h4>
    @foreach ($comments as $comment)
      <div class="comment-list">
         <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
               <div class="thumb">
                  <img src="{{ asset('assets/img/Sample_User_Icon_2.png') }}" alt="">
               </div>
               <div class="desc">
                  <p class="comment">
                     {{ $comment->comment}}
                  </p>
                  <div class="d-flex justify-content-between">
                     <div class="d-flex align-items-center">
                        <h5>
                           <a href="#"> 
                              {{ $comment->user->name}}
                              @if($comment->user->role === 'administrator')
                                 <span>(admin)</span>
                              @endif
                           </a>
                        </h5>
                        {{-- <p class="date">December 4, 2017 at 3:12 pm </p> --}}
                     </div>
                     {{-- <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                     </div> --}}
                  </div>
               </div>
            </div>
         </div>
      </div>
    @endforeach
</div>