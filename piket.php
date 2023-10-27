<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="ruang">
    <div class="container mt-4">
        <h2 class="mb-3 mt-2" style="color: white;">A-PIKET XI-RPL</h2>
        <div class="alert alert-success alert-dismissible fade show my-alert d-none" role="alert">
            <strong>Terima kasih!</strong> Data permohonan ijin telah berhasil diterima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <form class="row" name="proses-ijin">
            <div class="col-4  md-4">
                <label for="kelas" class="form-label">Pilih Kelas</label>
                <select class="form-select" name="Hari" required onchange="hari(this.value)">
                    <option selected value="kosong">- PILIH Hari -</option>
                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                </select>
            </div>

            <div id="senin" class="col-8 mt-1 mb-3 d-none">
                <div class="accordion" id="accordionPanelsStayOpenExample" >
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Yang Tidak Piket
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body" name="nama">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxAkmal" value="Akmal">
                                    <label class="form-check-label" for="inlineCheckboxAkmal">Akmal</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxArief" value="Arief">
                                    <label class="form-check-label" for="inlineCheckboxArief">Arief</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxMahes" value="Mahes">
                                    <label class="form-check-label" for="inlineCheckboxMahes">Mahes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxKezia" value="Kezia">
                                    <label class="form-check-label" for="inlineCheckboxKezia">Kezia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxHumam" value="Humam">
                                    <label class="form-check-label" for="inlineCheckboxHumam">Humam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxAra" value="Ara">
                                    <label class="form-check-label" for="inlineCheckboxAra">Ara</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxMoreno" value="Moreno">
                                    <label class="form-check-label" for="inlineCheckboxMoreno">Moreno</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxFajar" value="Fajar">
                                    <label class="form-check-label" for="inlineCheckboxFajar">Fajar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="selasa" class="col-8 mt-1 mb-3 d-none">
                <div class="accordion" id="accordionPanelsStayOpenExample" >
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                Yang Tidak Piket
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body" name="nama[]">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxDiwa" value="Diwa">
                                    <label class="form-check-label" for="inlineCheckboxDiwa">Diwa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxDhika" value="Dhika">
                                    <label class="form-check-label" for="inlineCheckboxDhika">Dhika</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxTono" value="Tono">
                                    <label class="form-check-label" for="inlineCheckboxTono">Tono</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxIky" value="Iky">
                                    <label class="form-check-label" for="inlineCheckboxIky">Iky</label>
                                </div>
                                <div class "form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxKheyla" value="Kheyla">
                                    <label class="form-check-label" for="inlineCheckboxKheyla">Kheyla</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxJesica" value="Jesica">
                                    <label class="form-check-label" for="inlineCheckboxJesica">Jesica</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxAlex" value="Alex">
                                    <label class="form-check-label" for="inlineCheckboxAlex">Alex</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="rabu" class="col-8 mt-1 mb-3 d-none">
                <div class="accordion" id="accordionPanelsStayOpenExample" >
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                Yang Tidak Piket
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body" name="nama[]">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxSyamil" value="Syamil">
                                    <label class="form-check-label" for="inlineCheckboxSyamil">Syamil</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxReivan" value="Reivan">
                                    <label class="form-check-label" for="inlineCheckboxReivan">Reivan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxAthaya" value="Athaya">
                                    <label class="form-check-label" for="inlineCheckboxAthaya">Athaya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxZahra" value="Zahra">
                                    <label class="form-check-label" for="inlineCheckboxZahra">Zahra</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxHaris" value="Haris">
                                    <label class="form-check-label" for="inlineCheckboxHaris">Haris</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxZaid" value="Zaid">
                                    <label class="form-check-label" for="inlineCheckboxZaid">Zaid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxGilang" value="Gilang">
                                    <label class="form-check-label" for="inlineCheckboxGilang">Gilang</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxRendy" value="Rendy">
                                    <label class="form-check-label" for="inlineCheckboxRendy">Rendy</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="kamis" class="col-8 mt-1 mb-3 d-none">
                <div class="accordion" id="accordionPanelsStayOpenExample" >
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
                                Yang Tidak Piket
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body" name="nama[]">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxFarhan" value="Farhan">
                                    <label class="form-check-label" for="inlineCheckboxFarhan">Farhan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxMaritzka" value="Maritzka">
                                    <label class="form-check-label" for="inlineCheckboxMaritzka">Maritzka</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxZaky" value="Zaky">
                                    <label class="form-check-label" for="inlineCheckboxZaky">Zaky</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxIrfan" value="Irfan">
                                    <label class="form-check-label" for="inlineCheckboxIrfan">Irfan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxFathir" value="Fathir">
                                    <label class="form-check-label" for="inlineCheckboxFathir">Fathir</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxEffendy" value="Effendy">
                                    <label class="form-check-label" for="inlineCheckboxEffendy">Effendy</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxIqbal" value="Iqbal">
                                    <label class="form-check-label" for="inlineCheckboxIqbal">Iqbal</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nama[]" id="inlineCheckboxAlek" value="Alek">
                                    <label class="form-check-label" for="inlineCheckboxAlek">Alek</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tanggal">
                <div class="col-md-4 mb-4 mt-1">
                    <label for="tgl" class="form-label mb-3" style="color: white;">Tanggal</label>
                    <input type="date" id="tgl" class="form-control" name="tanggal" required>
                </div>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alasan" autocomplete="off" lang="ind"></textarea>
                <label for="alasan" class="form-label" style="margin-left: 16px;">keterangan dari yang tidak piket</label>
            </div>
            <div class="buton">
                <div class="col-12 mt-1">
                    <button type="submit" class="btn btn-outline-light btn-kirim">Kirim Data</button>
                    <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                        <span role="status">Loading...</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxCJqeVhlXaxwwqp31hqSZVbwn1yJOi17aUBGzJJ-hjTcW65f6BbMPo_9X2X9eMhbA/exec';
    const form = document.forms['proses-ijin'];
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');
    const hariSenin = document.getElementById('senin');
    const hariSelasa = document.getElementById('selasa');
    const hariRabu = document.getElementById('rabu');
    const hariKamis = document.getElementById('kamis');

    function hari(selectedValue) {
        if (selectedValue === 'senin') {
            hariSenin.classList.remove('d-none');
            hariSelasa.classList.add('d-none');
            hariRabu.classList.add('d-none');
            hariKamis.classList.add('d-none');
        } else if (selectedValue === 'kamis') {
            hariKamis.classList.remove('d-none');
            hariSenin.classList.add('d-none');
            hariSelasa.classList.add('d-none');
            hariRabu.classList.add('d-none');
        } else if (selectedValue === 'selasa') {
            hariSelasa.classList.remove('d-none');
            hariSenin.classList.add('d-none');
            hariRabu.classList.add('d-none');
            hariKamis.classList.add('d-none');
        } else if (selectedValue === 'rabu') {
            hariRabu.classList.remove('d-none');
            hariSenin.classList.add('d-none');
            hariSelasa.classList.add('d-none');
            hariKamis.classList.add('d-none');
        } else if (selectedValue === 'kosong') {
            hariRabu.classList.add('d-none');
            hariSenin.classList.add('d-none');
            hariSelasa.classList.add('d-none');
            hariKamis.classList .add('d-none');
        }
    }

    form.addEventListener('submit', e => {
        e.preventDefault();

        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');

        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
            .then(response => {
                btnLoading.classList.toggle('d-none');
                btnKirim.classList.toggle('d-none');

                myAlert.classList.toggle('d-none');
                form.reset();

                console.log('Success!', response);
            })
            .catch(error => console.error('Error!', error.message));
    });
</script>
</body>
</html>
