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
        window.location.href = '';
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
                <!--begin::Tables Widget 10-->
                <div class="card">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">

                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Daftar KRS</span>
                            <span class="text-muted mt-1 fw-bold fs-7"><?= 0;?>
                                KRS</span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-trigger="hover" title="Klik untuk tambah data">
                                <a href="<?=base_url('krs/show_add');?>"
                                    class="btn btn-sm btn-light btn-active-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Data KRS
                                </a>
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
                                        <th class="p-0 text-muted fw-bold text-center min-w-200px">NIM</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-100px">Mata Kuliah</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-200px">Semester</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-200px">Total SKS</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-200px">Tanggal Isi</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-100px">Aksi</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <?php $i = 0;?>
                                    <?php foreach ($data_krs as $key => $krs):?>
                                    <tr>
                                        <td class="text-dark text-center fw-bolder">
                                            <?=$i+=1;?>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?=$krs->nim;?></a>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <?=$krs->nama_mk;?>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <span class="badge badge-light-success"><?=$krs->semester;?></span>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <span class="badge badge-light-success"><?=$krs->total_sks;?></span>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <span class="badge badge-light-success"><?=$krs->tanggal;?></span>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <a href="<?=base_url('admin/edit_krs/').$krs->id_krs;?>"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <button data-bs-target="#hapuskrs<?=$krs->id_krs;?>" data-bs-toggle="modal"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                            fill="black" />
                                                        <path opacity="0.5"
                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                            fill="black" />
                                                        <path opacity="0.5"
                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
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
                </div>
                <!--end::Tables Widget 10-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Root-->
<!--begin::Modals-->
<!-- begin::modal -->
<!-- begin::delete modal -->
<?php foreach ($data_krs as $key => $krs):?>
<div class="modal fade" id="hapuskrs<?=$krs->id_krs;?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?=base_url('admin/hapus_krs');?>" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus krs</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <input type="hidden" name="id_krs" value="<?=$krs->id_krs;?>">
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Anda yakin ingin menghapus krs
                            <strong>00</strong>?</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_question" class="btn btn-sm btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- end::delete modal -->
<!-- end::modal -->
<!--end::Modals-->
<?php require 'application/views/admin/templates/footer.php';?>