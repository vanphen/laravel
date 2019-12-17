@extends('view')
@section('main')
    <div class="ui centered grid">
        <div class="six wide tablet eight wide computer column">
            <div class="ui threaded comments">
                <h1 class="ui teal block fluid header">
                    <strong>Nghệ thuật xử lý background job</strong>
                </h1>

                <section id="content" class="ui pilled segment md" ng-non-bindable="">
                    <p>Đây thực chất là phần tiếp theo của câu chuyện anh chàng buôn chuối trong <a href="https://kipalog.com/posts/Background-job-va-queue-cho-nguoi-nong-dan">bài viết này</a></p>
                     <span id="toc-first-things-first"></span><h2 class="ui dividing header">First things first</h2>

                    <p>Yeah, lại là mình đây, <strong>Minh Monmen</strong> trong vai trò chàng trai buôn chuối rảnh rỗi ngồi viết lách linh tinh. Sau khi thu thập được rất nhiều kinh nghiệm từ việc bán chuối bán chuối, mình tự nhận thấy một số người coi trọng những <strong>kỹ sư</strong> thực thụ hơn những con buôn trái nghề. Nên là trong lần này mình sẽ hóa thân thành 1 <strong>kỹ sư</strong> phần mềm giả trang để tìm hiểu về background job và tiếp tục câu chuyện còn dang dở lần trước ở mức độ sâu hơn.</p>

                    <p>Trong bài viết này, ngoài việc tổng hợp thông tin từ một số nguồn tin chính thống, mình cũng sẽ chia sẻ thêm về những cách thiết kế và xử lý job, queue, batch processing,... mà mình đã thực hiện sau nhiều thương vụ buôn chuối của mình.</p>

                    <p>Tuy nhiên, để có thể đọc hiểu trôi chảy những thứ mà mình nêu ra ở đây thì các bạn nên có 1 số kiến thức nền tảng về:</p>

                    <ul class="ui list">
                        <li>Background job</li>
                        <li>Queue</li>
                        <li>Event-driven</li>
                        <li>Cronjob</li>
                        <li>Batch processing</li>
                        <li>Concurrency and lock</li>
                    </ul>

                </section>


                <h3 class="ui dividing header">Comments</h3>
                <div class="comment">
                    <a class="avatar">
                        <img src="https://semantic-ui.com/images/avatar/small/matt.jpg">
                    </a>
                    <div class="content">
                        <a class="author">Matt</a>
                        <div class="metadata">
                            <span class="date">Today at 5:42PM</span>
                        </div>
                        <div class="text">
                            How artistic!
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <a class="avatar">
                        <img src="https://semantic-ui.com/images/avatar/small/matt.jpg">
                    </a>
                    <div class="content">
                        <a class="author">Joe Henderson</a>
                        <div class="metadata">
                            <span class="date">5 days ago</span>
                        </div>
                        <div class="text">
                            Dude, this is awesome. Thanks so much
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>
                <form class="ui reply form">
                    <div class="field">
                        <textarea></textarea>
                    </div>
                    <div class="ui blue labeled submit icon button">
                        <i class="icon edit"></i> Bình Luận
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
