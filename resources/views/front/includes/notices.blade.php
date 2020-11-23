<div class="notice-list ">
    <h3><i class="fa fa-tags"></i> Notice</h3>
    <ul class="list-group">
        @foreach($publishedNotices as $publishedNotice)
            <li class="list-group-item">
                <a href="http://docs.google.com/gview?url={{asset($publishedNotice->notice_file)}}&embedded=true" target="blank"><span>&raquo;</span> {{$publishedNotice->subject}}</a>
            </li>
        @endforeach

    </ul>
</div>