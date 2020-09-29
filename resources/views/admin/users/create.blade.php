@component('admin.layout.content',['title'=> 'ایجاد کاربر'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">لیست کاربران</a></li>
        <li class="breadcrumb-item active">ایجاد کاربر</li>
    @endslot
    <div class="row">
        <div class="col-lg-12">
            @include('admin.layout.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد کاربر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <form class="form-horizontal" action="{{ route('admin.users.store') }}" method="POST">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام کاربر</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام کاربر را وارد کنید">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">موبایل</label>
                            <input type="phonenumber" name="phone" class="form-control"  placeholder="موبایل را وارد کنید">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت کاربر</button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
@endcomponent
