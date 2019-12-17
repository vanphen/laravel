@extends('view')
@section('main')
    <main class="master-body" scrollable-to-top="" data-target=".scroll-top">
        <div class="ui page grid">
            <div class="eleven wide column feed-col ng-scope" ng-controller="FeedController" ng-init="focusTab('top', true)">
                <div class="feed">
                    <div class="ui bottom attached tab massive selection divided list feed-list active" ng-class="{'active':focus=='new'}" ng-hide="data_retrieving" id="new-panel">
                        <div class="item ng-scope" ng-repeat="post in posts">
                            <a href="/users/minhpq331/mypage" class="ui avatar image">
                                <img class="lazy" src="https://avatars1.githubusercontent.com/u/16734662?v=4">
                            </a>
                            <a href="/posts/Nghe-thuat-xu-ly-background-job" class="right floated feed-date ng-binding">
                                45
                                <i class="bookmark icon"></i>
                                2
                                <i class="comment icon"></i>
                            </a>
                            <div class="content">
                                <div class="header">
                                    <a href="/posts/Nghe-thuat-xu-ly-background-job" class="ng-binding">
                                        Nghệ thuật xử lý background job
                                    </a>
                                    <div class="tag">
                                        <!-- ngRepeat: tag in post.tags --><a href="/tags/Background%20Job" class="ui label ng-binding ng-scope" ng-repeat="tag in post.tags">
                                            Background Job
                                        </a><!-- end ngRepeat: tag in post.tags --><a href="/tags/queue" class="ui label ng-binding ng-scope" ng-repeat="tag in post.tags">
                                            queue
                                        </a><!-- end ngRepeat: tag in post.tags --><a href="/tags/Web" class="ui label ng-binding ng-scope" ng-repeat="tag in post.tags">
                                            Web
                                        </a><!-- end ngRepeat: tag in post.tags --><a href="/tags/Architecture" class="ui label ng-binding ng-scope" ng-repeat="tag in post.tags">
                                            Architecture
                                        </a><!-- end ngRepeat: tag in post.tags -->
                                    </div>
                                </div>
                                <div class="detail ng-binding"> Đây thực chất là phần tiếp theo của câu chuyện anh chàng buôn chuối trong (Link) (Ảnh) First things first Yeah, lại là mình đây, Minh Monmen tr... </div>
                                <div class="meta ng-binding">
                                    <a href="/users/minhpq331/mypage" class="ng-binding">
                                        Minh Monmen
                                    </a>
                                    viết
                                    25 ngày
                                    trước
                                </div>
                                <div class="smart-meta ng-binding">
                                    45
                                    <i class="bookmark icon"></i>
                                    2
                                    <i class="comment icon"></i>
                                </div>
                            </div>
                        </div>
                        @for($i = 0 ; $i<5; $i++)
                            <div class="item ng-scope" ng-repeat="post in posts">
                                ​
                                <!-- Item -->
                                <a href="/users/NguyenHoang11111111111/mypage" class="ui avatar image">
                                    <img class="lazy" src="http://graph.facebook.com/10215429550788189/picture">
                                </a>
                                <a href="/posts/Phan-1--Tu-dong-hoa-cong-viec-nham-chan-voi-Heroku" class="right floated feed-date ng-binding">
                                    1
                                    <i class="bookmark icon"></i>
                                    0
                                    <i class="comment icon"></i>
                                </a>
                                <div class="content">
                                    <div class="header">
                                        <a href="/posts/Phan-1--Tu-dong-hoa-cong-viec-nham-chan-voi-Heroku" class="ng-binding">
                                            [Phần 1] Tự động hóa công việc nhàm chán với Heroku
                                        </a>
                                        <div class="tag">
                                            <!-- ngRepeat: tag in post.tags --><a href="/tags/node.js" class="ui label ng-binding ng-scope" ng-repeat="tag in post.tags">
                                                node.js
                                            </a><!-- end ngRepeat: tag in post.tags --><a href="/tags/facebook" class="ui label ng-binding ng-scope" ng-repeat="tag in post.tags">
                                                facebook
                                            </a><!-- end ngRepeat: tag in post.tags --><a href="/tags/heroku" class="ui label ng-binding ng-scope" ng-repeat="tag in post.tags">
                                                heroku
                                            </a><!-- end ngRepeat: tag in post.tags -->
                                        </div>
                                    </div>
                                    <div class="detail ng-binding"> I choose a lazy person to do a hard job. Because a lazy person will find an easy way to do it. Bill Gates Mở bài Bác Gates đã bảo răng bác luôn ... </div>
                                    <div class="meta ng-binding">
                                        <a href="/users/NguyenHoang11111111111/mypage" class="ng-binding">
                                            Nguyên Hoàng
                                        </a>
                                        viết
                                        26 ngày
                                        trước
                                    </div>
                                    <div class="smart-meta ng-binding">
                                        1
                                        <i class="bookmark icon"></i>
                                        0
                                        <i class="comment icon"></i>
                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div> <!-- Page grid -->
    </main>
@endsection
