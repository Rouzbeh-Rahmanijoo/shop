@component('admin.layout.content',['title'=> 'پنل مدیریت'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active">پنل مدیریت</li>
        <li class="breadcrumb-item"><a href="/admin/users ">لیست کاربران</a></li>

    @endslot

    <h2>Admin Panel</h2>
@endcomponent
