@extends('index.layout.index')
@section('content')
	<!-- Blog Single Start Here -->
		<div class="single-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                	<h1>Tin tức</h1>
                    <div class="col-md-8 col-sm-12">
                    	<h3>{{$news->tittle}}</h3>
						<div class="single-image">
							@foreach($image as $img)
							<img src="{{ asset('upload/news/'.$img->name)}}"/>
                             @endforeach                 
						</div>
						
						<p style="text-align: justify">{{$news->content}}</p>

						<!-- <blockquote>
							<i class="fa fa-quote-left" aria-hidden="true"></i>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC
						</blockquote>
						<p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p> 
						<p>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p> -->
						<div class="share-section">
							<div class="row">
								<div class="col-sm-6 col-xs-12 life-style">
									<span class="author"> 
										<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>{{$news->author}}</a>
									</span> 
									<span class="date">
										<i class="fa fa-calendar" aria-hidden="true"></i>{{$news->created_at}}
									</span>
									<span class="comment"> 
										<a href="#"> 
											<i class="fa fa-commenting-o" aria-hidden="true"></i> 12
										</a>
									</span>
								</div>
							</div>
						</div>

  
						<div class="like-section">
							<h3>Bạn có thể đọc thêm</h3>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
									<div class="popular-post-img">
										<a href="#"><img src="{{ asset('index/images/blog-details/mid1.jpg')}}" alt="Blog single photo"></a>                                   
									</div>                                
									<h3>
										<a href="#">Quarter-final against Chile is special</a>
									</h3>
									<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
									<div class="popular-post-img">
										<a href="#"><img src="{{ asset('index/images/blog-details/mid2.jpg')}}" alt="Blog single photo"></a>                     
									</div>                                
									<h3>
										<a href="#">Agüero’s goals in City’s evolving drama</a>
									</h3>
									<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
									<div class="popular-post-img">
										<a href="#"><img src="{{ asset('index/images/blog-details/mid3.jpg')}}" alt="Blog single photo"></a>                                  
									</div>                                
									<h3>
										<a href="#">The hosts blasted their way through</a>
									</h3>
									<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span>
								</div>
							</div>
						</div>  
						<div class="author-comment">
							<h3 class="title-bg">Recent Comments</h3>
							<ul>
								<li>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="image-comments"><img src="images/blog-details/comment.png" alt="Blog Details photo"></div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
											<span class="reply"> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span></span>
											<div class="dsc-comments">
												<h4>Thesera Minton</h4>                                            
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
												<a href="#"> Reply</a>
											</div>    
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="image-comments"><img src="images/blog-details/comment.png" alt="Blog Details photo"></div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
											<span class="reply"> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span></span>
											<div class="dsc-comments">
												<h4>Thesera Minton</h4>                                            
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
												<a href="#"> Reply</a>
											</div>    
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="image-comments"><img src="images/blog-details/comment.png" alt="Blog single photo"></div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
											<span class="reply"><span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span></span>
											<div class="dsc-comments">
												<h4>Thesera Minton</h4>                                            
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
												<a href="#"> Reply</a>
											</div>    
										</div>
									</div>
								</li>
							</ul>
						</div>
				        <div class="leave-comments-area">
				            <form>
								<fieldset>
                                    <div class="form-group">
                                        <label>Fast Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                        <label>Your comment here...</label>
                                        <textarea cols="40" rows="10" class="textarea form-control"></textarea>
                                    </div>       
                                    <div class="form-group">
                                        <button class="btn-send" type="submit">Post Comment</button>
                                    </div> 
								</fieldset>
							</form>
						</div>                                 
					</div>
                    @include('index.layout.right')
                </div>
            </div>
        </div>
        <!-- Blog Single End Here --> 
        
        <!-- Search Modal Start Here -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Soccer News" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End Here -->
        
		<!-- Start scrollUp  -->
		<div id="return-to-top">
			<span>Top</span>
		</div>
		<!-- End scrollUp  -->
@endsection