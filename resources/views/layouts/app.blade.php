

<div class="side-menu">
    <div class="school-info">
        <img src="{{ asset('img/maltese_cross.png') }}" alt="letran-logo" class="logo" />
        <h1>L KOLEHIYO</h1>
    </div>
    <ul>
        <li><a href="{{ route('students.create') }}"><i class="fas fa-id-card"></i> Add New Students</a></li>
        <li><a href="{{ route('grades.upload') }}"><i class="fas fa-file-upload"></i> Grades Upload</a></li>
        <li><a href="{{ route('events.index') }}"><i class="fas fa-calendar-alt"></i> School Events</a></li>
        <li><a href="{{ route('feedbacks.index') }}"><i class="fa fa-comments"></i> Feedback/Concerns</a></li>
        <li><a href="{{ route('announcements.index') }}"><i class="fas fa-bullhorn"></i> Announcements</a></li>
        <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>
