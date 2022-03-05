<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $page_heading }}</h1>
            </div><!-- /.col -->
            @if ($breadcrumb_item)
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        @foreach ($breadcrumb_item as $item)
                            @if (!$loop->last)
                                <li class="breadcrumb-item">
                                    <a href="">{{ $item }}</a>
                                </li>
                            @else
                                <li class="breadcrumb-item active">
                                    {{ $item }}
                                </li>
                            @endif

                        @endforeach
                    </ol>
                </div><!-- /.col -->
            @endif
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
