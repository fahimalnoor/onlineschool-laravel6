<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img class="mt-2" src="{{ asset('uploads/avatars').'/'.Auth::user()->avatar }}" alt="Logo"></a>
                <form enctype="multipart/form-data" action="{{ url('dashboard') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="avatar" class="form-control-file text-primary" id="profile-pic">
                        <input type="submit" value="Upload profile picture" class="mt-1 form-control-file btn btn-sm btn-primary" id="profile-pic">
                    </div>
                </form>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Profile Information </a>
                    </li>
                    <li>
                        <a href="{{ url('dashboard/allcourses') }}"> <i class="menu-icon fa fa-laptop"></i>Check All Courses</a>
                    </li>
                    <li>
                        <a href="{{ url('dashboard/regcourseform') }}"> <i class="menu-icon fa fa-print"></i>Register For A Course</a>
                    </li>
    
                    <li>
                        <a href="{{ url('dashboard/books') }}"> <i class="menu-icon fa fa-book"></i>Books</a>
                    </li>
                    <li>
                        <a href="{{ url('dashboard/results') }}"> <i class="menu-icon fa fa-sticky-note"></i>Results</a>
                    </li>
                
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->