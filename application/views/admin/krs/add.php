<?php require 'application/views/admin/templates/header.php';?>
<!-- begin::Notification -->
<?php if($this->session->flashdata('success')): ?>
<script>
var successfuly = '<?= $this->session->flashdata('success'); ?>';
Swal.fire({
    title: 'Sukses!',
    text: successfuly,
    icon: 'success',
    confirmButtonText: 'OK'
}).then(function(result) {
    if (result.isConfirmed) {
        // window.location.href = '';
        $('input[type="checkbox"]').prop('checked', false);
        localStorage.removeItem('checkboxStatus');

        <?php $this->session->unset_userdata('success'); ?>
    }
});
</script>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
<script>
Swal.fire({
    title: 'Error!',
    text: '<?php echo $this->session->flashdata('error'); ?>',
    icon: 'error',
    confirmButtonText: 'OK'
}).then(function(result) {
    if (result.isConfirmed) {
        window.location.href = '';
    }
});
</script>
<?php endif; ?>
<!-- end::Notification -->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="g-5 gx-xxl-8">
                <form action="<?=base_url('krs/simpan_krs');?>" method="post">
                    <!--begin::Tables Widget 10-->
                    <div class="card">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Daftar Mata Kuliah</span>
                                <span class="text-muted mt-1 fw-bold fs-7"><?= $jumlah_mk;?>
                                    Mata Kuliah</span>
                            </h3>
                            <div class="card-toolbar">
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-trigger="hover" title="Filter Semester">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btm-sm btn-icon btn-active-color-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                                            data-kt-menu-placement="top-start" data-bs-toggle="tooltip"
                                            data-bs-placement="right" data-bs-dismiss="click" title="Filter Semester">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                    Filter Semester
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="myTable"
                                    class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="border-0">
                                            <th class="p-0 text-muted fw-bold text-center min-w-30px">No</th>
                                            <th class="p-0 text-muted fw-bold text-center min-w-200px">Kode MK</th>
                                            <th class="p-0 text-muted fw-bold text-center min-w-100px">Nama MK</th>
                                            <th class="p-0 text-muted fw-bold text-center min-w-200px">Semester</th>
                                            <th class="p-0 text-muted fw-bold text-center min-w-200px">Jumlah SKS</th>
                                            <th class="p-0 text-muted fw-bold text-center min-w-100px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <?php $i = 0;?>
                                        <?php foreach ($data_mk as $key => $mk):?>
                                        <tr>
                                            <td class="text-dark text-center fw-bolder">
                                                <?=$i+=1;?>
                                            </td>
                                            <td class="text-dark text-center fw-bolder">
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?=$mk->kode_mk;?></a>
                                            </td>
                                            <td class="text-dark text-center fw-bolder">
                                                <?=$mk->nama_mk;?>
                                            </td>
                                            <td class="text-dark text-center fw-bolder">
                                                <span class="badge badge-light-success"><?=$mk->nama_semester;?></span>
                                            </td>
                                            <td class="text-dark text-center fw-bolder">
                                                <span class="badge badge-light-success"><?=$mk->jumlah_sks;?></span>
                                            </td>
                                            <td class="text-dark text-center fw-bolder">
                                                <div
                                                    class="form-check d-flex justify-content-center form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" name="kode_mk[]" type="checkbox"
                                                        value="<?=$mk->kode_mk;?>" data-kt-check="true"
                                                        data-kt-check-target=".widget-9-check"
                                                        data-sks="<?=$mk->jumlah_sks?>" />
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                        <div class="buttons text-end">
                            <button type="submit" name="simpan" class="btn btn-sm btn-primary me-5 mb-5">Simpan
                                KRS</button>
                        </div>
                    </div>
                </form>
                <!--end::Tables Widget 10-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Root-->
<?php require 'application/views/admin/templates/footer.php';?>