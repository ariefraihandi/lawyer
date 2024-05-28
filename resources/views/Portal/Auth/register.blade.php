@extends('Portal/Index/app-auth')

@push('head-script')
      <link rel="stylesheet" href="{{ asset('portal_assets') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
      <link rel="stylesheet" href="{{ asset('portal_assets') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
      <link rel="stylesheet" href="{{ asset('portal_assets') }}/assets/vendor/libs/bs-stepper/bs-stepper.css" />
      <link rel="stylesheet" href="{{ asset('portal_assets') }}/assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
      <link rel="stylesheet" href="{{ asset('portal_assets') }}/assets/vendor/libs/select2/select2.css" />
      <link rel="stylesheet" href="{{ asset('portal_assets') }}/assets/vendor/libs/@form-validation/umd/styles/index.min.css" />
      <link rel="stylesheet" href="{{ asset('portal_assets') }}/assets/vendor/css/pages/page-auth.css" />
@endpush

@section('content')
<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">
      <!-- Left Text -->
      <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
        <div class="w-px-400">
          <img
            src="{{ asset('portal_assets') }}/assets/img/illustrations/create-account-light.png"
            class="img-fluid"
            alt="multi-steps"
            width="600"
            data-app-dark-img="illustrations/create-account-dark.png"
            data-app-light-img="illustrations/create-account-light.png" />
        </div>
      </div>
      <!-- /Left Text -->

      <!--  Multi Steps Registration -->
      <div class="d-flex col-lg-8 align-items-center justify-content-center authentication-bg p-sm-5 p-3">
        <div class="w-px-700">
            <div id="multiStepsValidation" class="bs-stepper shadow-none">
                <div class="bs-stepper-header border-bottom-0">
                    <div class="step" data-target="#accountDetailsValidation">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle"><i class="bx bx-user"></i></span>
                            <span class="bs-stepper-label mt-1">
                                <span class="bs-stepper-title">Akun</span>
                                <span class="bs-stepper-subtitle">Detail Akun</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#officeInfoValidation">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle"><i class="bx bx-home-alt"></i></span>
                            <span class="bs-stepper-label mt-1">
                                <span class="bs-stepper-title">Kantor</span>
                                <span class="bs-stepper-subtitle">Data Kantor</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#billingLinksValidation">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle"><i class="bx bx-detail"></i></span>
                            <span class="bs-stepper-label mt-1">
                                <span class="bs-stepper-title">Pembayaran</span>
                                <span class="bs-stepper-subtitle">Detail Pembayaran</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <form id="multiStepsForm" onSubmit="return false">
                        <!-- Account Details -->
                        <div id="accountDetailsValidation" class="content">
                            <div class="content-header mb-3">
                                <h3 class="mb-1">Informasi Akun</h3>
                                <span>Masukkan Detail Akun Anda</span>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="multiStepsName">Nama Lengkap</label>
                                    <input type="text" name="multiStepsName" id="multiStepsName" class="form-control" placeholder="Nama Saya, S.H., M.H." />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="multiStepsUsername">Username</label>
                                    <input type="text" name="multiStepsUsername" id="multiStepsUsername" class="form-control" placeholder="namasaya" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="multiStepsEmail">Email</label>
                                    <input type="email" name="multiStepsEmail" id="multiStepsEmail" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="multiStepsWhatsapp">Whatsapp</label>
                                  <input type="text" name="multiStepsWhatsapp" id="multiStepsWhatsapp" class="form-control" placeholder="08xxxxxxxxxx" />
                              </div>
                                <div class="col-sm-6 form-password-toggle">
                                    <label class="form-label" for="multiStepsPass">Kata Sandi</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="multiStepsPass" name="multiStepsPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsPass2" />
                                        <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-password-toggle">
                                    <label class="form-label" for="multiStepsConfirmPass">Konfirmasi Kata Sandi</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="multiStepsConfirmPass" name="multiStepsConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsConfirmPass2" />
                                        <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="multiStepsProvince">Provinsi</label>
                                  <select class="form-select" id="multiStepsProvince" name="multiStepsProvince">
                                      <option value="" selected disabled>Pilih Provinsi</option>
                                  </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="multiStepsRegency">Kabupaten/Kota</label>
                                    <select class="form-select" id="multiStepsRegency" name="multiStepsRegency" disabled>
                                        <option value="" selected disabled>Pilih Kabupaten/Kota</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="multiStepsDistrict">Distrik</label>
                                  <select class="form-select" id="multiStepsDistrict" name="multiStepsDistrict" disabled>
                                      <option value="" selected disabled>Pilih Distrik</option>
                                  </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="multiStepsVillage">Desa</label>
                                    <select class="form-select" id="multiStepsVillage" name="multiStepsVillage" disabled>
                                        <option value="" selected disabled>Pilih Desa</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                  <label class="form-label" for="multiStepsProfileImage">Gambar Profil</label>
                                  <input type="file" required name="multiStepsProfileImage" id="multiStepsProfileImage" class="form-control" accept="image/*">
                                  <div id="imagePreview" class="mt-2"></div>
                                </div>
                              
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev" disabled>
                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Berikutnya</span>
                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Office Info -->
                        <div id="officeInfoValidation" class="content">
                            <div class="content-header mb-3">
                                <h3 class="mb-1">Informasi Kantor</h3>
                                <span>Masukkan Detail Kantor Anda</span>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="officeName">Nama Kantor</label>
                                    <input
                                        type="text"
                                        id="officeName"
                                        name="officeName"
                                        class="form-control"
                                        placeholder="Nama Kantor" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="officeEmail">Email Kantor</label>
                                    <input
                                        type="email"
                                        id="officeEmail"
                                        name="officeEmail"
                                        class="form-control"
                                        placeholder="email.kantor@contoh.com" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="officePhone">Telepon Kantor</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="text"
                                            id="officePhone"
                                            name="officePhone"
                                            class="form-control"
                                            placeholder="021 555 0111" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="officeAddress">Alamat Kantor</label>
                                    <input
                                        type="text"
                                        id="officeAddress"
                                        name="officeAddress"
                                        class="form-control"
                                        placeholder="Alamat Kantor" />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="officeCity">Kota</label>
                                    <input
                                        type="text"
                                        id="officeCity"
                                        name="officeCity"
                                        class="form-control"
                                        placeholder="Nama Kota" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="officeState">Provinsi</label>
                                    <input
                                        type="text"
                                        id="officeState"
                                        name="officeState"
                                        class="form-control"
                                        placeholder="Nama Provinsi" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="officePostalCode">Kode Pos</label>
                                    <input
                                        type="text"
                                        id="officePostalCode"
                                        name="officePostalCode"
                                        class="form-control"
                                        placeholder="Kode Pos" />
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Berikutnya</span>
                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Billing Links -->
                        <div id="billingLinksValidation" class="content">
                            <div class="content-header mb-3">
                                <h3 class="mb-1">Pilih Paket</h3>
                                <span                        >Pilih paket sesuai kebutuhan Anda</span>
                            </div>
                            <!-- Opsi paket kustom -->
                            <div class="row gap-md-0 gap-3 mb-4">
                                <div class="col-md">
                                    <div class="form-check custom-option custom-option-icon">
                                        <label class="form-check-label custom-option-content" for="basicOption">
                                            <span class="custom-option-body">
                                                <span class="mb-2 h4 d-block">Dasar</span>
                                                <span class="mb-2 d-block">Awal yang sederhana untuk startup & Mahasiswa</span>
                                                <span class="d-flex justify-content-center">
                                                    <sup class="text-primary fs-big lh-1 mt-3">$</sup>
                                                    <span class="display-5 text-primary">0</span>
                                                    <sub class="lh-1 fs-big mt-auto mb-2 text-muted">/bulan</sub>
                                                </span>
                                            </span>
                                            <input
                                                name="customRadioIcon"
                                                class="form-check-input"
                                                type="radio"
                                                value=""
                                                id="basicOption" />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check custom-option custom-option-icon">
                                        <label class="form-check-label custom-option-content" for="standardOption">
                                            <span class="custom-option-body">
                                                <span class="mb-2 h4 d-block">Standar</span>
                                                <span class="mb-2 d-block">Untuk bisnis kecil hingga menengah</span>
                                                <span class="d-flex justify-content-center">
                                                    <sup class="text-primary fs-big lh-1 mt-3">$</sup>
                                                    <span class="display-5 text-primary">99</span>
                                                    <sub class="lh-1 fs-big mt-auto mb-2 text-muted">/bulan</sub>
                                                </span>
                                            </span>
                                            <input
                                                name="customRadioIcon"
                                                class="form-check-input"
                                                type="radio"
                                                value=""
                                                id="standardOption"
                                                checked />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check custom-option custom-option-icon">
                                        <label class="form-check-label custom-option-content" for="enterpriseOption">
                                            <span class="custom-option-body">
                                                <span class="mb-2 h4 d-block">Enterprise</span>
                                                <span class="mb-2 d-block">Solusi untuk perusahaan & organisasi</span>
                                                <span class="d-flex justify-content-center">
                                                    <sup class="text-primary fs-big lh-1 mt-3">$</sup>
                                                    <span class="display-5 text-primary">499</span>
                                                    <sub class="lh-1 fs-big mt-auto mb-2 text-muted">/tahun</sub>
                                                </span>
                                            </span>
                                            <input
                                                name="customRadioIcon"
                                                class="form-check-input"
                                                type="radio"
                                                value=""
                                                id="enterpriseOption" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--/ Opsi paket kustom -->
                            <div class="content-header mb-3">
                                <h3 class="mb-1">Informasi Pembayaran</h3>
                                <span>Masukkan informasi kartu Anda</span>
                            </div>
                            <!-- Detail Kartu Kredit -->
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label w-100" for="multiStepsCard">Nomor Kartu</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            id="multiStepsCard"
                                            class="form-control multi-steps-card"
                                            name="multiStepsCard"
                                            type="text"
                                            placeholder="1356 3215 6548 7898"
                                            aria-describedby="multiStepsCardImg" />
                                        <span class="input-group-text cursor-pointer" id="multiStepsCardImg"><span class="card-type"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label" for="multiStepsName">Nama Pada Kartu</label>
                                    <input
                                        type="text"
                                        id="multiStepsName"
                                        class="form-control"
                                        name="multiStepsName"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-6 col-md-4">
                                    <label class="form-label" for="multiStepsExDate">Tanggal Kadaluarsa</label>
                                    <input
                                        type="text"
                                        id="multiStepsExDate"
                                        class="form-control multi-steps-exp-date"
                                        name="multiStepsExDate"
                                        placeholder="MM/YY" />
                                </div>
                                <div class="col-6 col-md-3">
                                    <label class="form-label" for="multiStepsCvv">Kode CVV</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="text"
                                            id="multiStepsCvv"
                                            class="form-control multi-steps-cvv"
                                            name="multiStepsCvv"
                                            maxlength="3"
                                            placeholder="654" />
                                        <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                                    </button>
                                    <button type="submit" class="btn btn-success btn-next btn-submit">Kirim</button>
                                </div>
                            </div>
                            <!--/ Detail Kartu Kredit -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
      <!-- / Multi Steps Registration -->
    </div>
  </div>
  <script>
    // Check selected custom option
    window.Helpers.initCustomOptionCheck();
  </script>
@endsection

@push('footer-script')  
    <script src="{{ asset('portal_assets') }}/assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="{{ asset('portal_assets') }}/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="{{ asset('portal_assets') }}/assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
    <script src="{{ asset('portal_assets') }}/assets/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('portal_assets') }}/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
    <script src="{{ asset('portal_assets') }}/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="{{ asset('portal_assets') }}/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <script src="{{ asset('portal_assets/assets') }}/vendor/libs/sweetalert2/sweetalert2.js"></script>
@endpush

@push('footer-Sec-script')
    <script src="{{ asset('portal_assets') }}/assets/js/pages-auth-multisteps.js"></script>
    <script>
      $(document).ready(function() {
          var select2 = $('.select2');
        
          if (select2.length) {
              select2.each(function () {
                  var $this = $(this);
                  $this.wrap('<div class="position-relative"></div>');
                  $this.select2({
                      placeholder: 'Select an option',
                      dropdownParent: $this.parent()
                  });
              });
          }
        
          $('#multiStepsProvince').select2({
            placeholder: 'Pilih Provinsi',
            allowClear: true,
            ajax: {
                url: '/provinces',
                type: 'GET',
                dataType: 'json',
                processResults: function(data) {
                    // Mengonversi huruf awal dari setiap kata menjadi huruf besar untuk nama provinsi
                    var formattedData = data.map(function(province) {
                        var words = province.name.toLowerCase().split(' ');
                        for (var i = 0; i < words.length; i++) {
                            words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
                        }
                        return {
                            id: province.code,
                            text: words.join(' ')
                        };
                    });
                    return {
                        results: formattedData
                    };
                },
                data: function (params) {
                    var query = {
                        search: params.term
                    }
                    return query;
                }
            }
          });

          $('#multiStepsProvince').on('select2:select', function(e) {
            var provinceCode = e.params.data.id;
            $('#multiStepsRegency').val(null).trigger('change').prop('disabled', true);
            $('#multiStepsDistrict').val(null).trigger('change').prop('disabled', true);
            $('#multiStepsVillage').val(null).trigger('change').prop('disabled', true);
            if (provinceCode) {
              $('#multiStepsRegency').select2({
              placeholder: 'Pilih Kabupaten/Kota',
              allowClear: true,
              ajax: {
                url: '/regencies',
                type: 'GET',
                dataType: 'json',
                data: function (params) {
                    var query = {
                        province_code: provinceCode,
                        search: params.term // Menambahkan nilai pencarian dari input Regency
                    }
                    return query;
                },
                processResults: function(data) {
                    // Mengonversi huruf awal dari setiap kata menjadi huruf besar untuk nama kabupaten/kota
                    var formattedData = data.map(function(regency) {
                        var words = regency.name.toLowerCase().split(' ');
                        for (var i = 0; i < words.length; i++) {
                            words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
                        }
                        return {
                            id: regency.code,
                            text: words.join(' ')
                        };
                    });
                    return {
                        results: formattedData
                    };
                  }
                }
              }).prop('disabled', false);
            }
          });

          $('#multiStepsRegency').on('select2:select', function(e) {
              var regencyCode = e.params.data.id;
              $('#multiStepsDistrict').val(null).trigger('change').prop('disabled', true);
              $('#multiStepsVillage').val(null).trigger('change').prop('disabled', true);
              if (regencyCode) {
                  $('#multiStepsDistrict').select2({
                      placeholder: 'Pilih Distrik',
                      allowClear: true,
                      ajax: {
                          url: '/districts',
                          type: 'GET',
                          dataType: 'json',
                          data: function (params) {
                              var query = {
                                  regency_code: regencyCode,
                                  search: params.term // Menambahkan nilai pencarian dari input District
                              }
                              return query;
                          },
                          processResults: function(data) {
                              return {
                                  results: $.map(data, function(district) {
                                      return {
                                          id: district.code,
                                          text: district.name
                                      };
                                  })
                              };
                          }
                      }
                  }).prop('disabled', false);
              }
          });
        
          $('#multiStepsDistrict').on('select2:select', function(e) {
              var districtCode = e.params.data.id;
              $('#multiStepsVillage').val(null).trigger('change').prop('disabled', true);
              if (districtCode) {
                  $('#multiStepsVillage').select2({
                      placeholder: 'Pilih Desa',
                      allowClear: true,
                      ajax: {
                          url: '/villages',
                          type: 'GET',
                          dataType: 'json',
                          data: function (params) {
                              var query = {
                                  district_code: districtCode,
                                  search: params.term // Menambahkan nilai pencarian dari input Village
                              }
                              return query;
                          },
                          processResults: function(data) {
                              return {
                                  results: $.map(data, function(village) {
                                      return {
                                          id: village.code,
                                          text: village.name
                                      };
                                  })
                              };
                          }
                      }
                  }).prop('disabled', false);
              }
          });
      });

            // Fungsi untuk menampilkan preview gambar saat dipilih
      function previewImage(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#imagePreview').html('<img src="' + e.target.result + '" class="img-fluid" style="max-height: 200px;" />');
              }
              reader.readAsDataURL(input.files[0]);
          }
      }

      // Mengaktifkan event onchange pada input file
      $('#multiStepsProfileImage').change(function () {
          previewImage(this);
      });

      document.getElementById('multiStepsProfileImage').addEventListener('change', function() {
        var file = this.files[0];
        var imageType = /image.*/;

        if (file.type.match(imageType)) {
          if (file.size <= 2 * 1024 * 1024) { // Ukuran maksimum 2MB (2 * 1024 * 1024 bytes)
            var reader = new FileReader();
            reader.onload = function(e) {
              document.getElementById('imagePreview').innerHTML = '<img src="' + e.target.result + '" style="max-width: 100%; max-height: 200px;">';
            };
            reader.readAsDataURL(file);
          } else {
            alert('Ukuran gambar melebihi batas 2MB.');
            this.value = ''; // Mengosongkan input file
          }
        } else {
          alert('Hanya file gambar yang diizinkan.');
          this.value = ''; // Mengosongkan input file
        }
      });
      </script>
      
        
    <script>
        @if(session('response'))
            var response = @json(session('response'));
            showSweetAlert(response);
        @endif
    </script>  
@endpush