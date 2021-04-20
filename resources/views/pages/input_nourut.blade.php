@extends('layouts.main');
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulir Pelayanan</div>
 
                <div class="card-body">
                    <form method="POST" action="/feedbackproses">
                        @csrf
 
                        <div class="form-group">
                            <label>No urut</label>
                            <input type="text" class="form-control" name="no_urut" value="{{ old('no_urut') }}" required>
                        </div>
                        <div>
                            <label>Pilih Kepuasan</label>
                            <br>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan">
                                <div>
                                    <h1 style="font-size: 50px">&#128525;</h1>
                                    <h3 style="font-size: 10px">Sangat Puas</h3>
                                </div>
                            </label>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan">
                                <div>
                                    <h1 style="font-size: 50px">&#128514;</h1>
                                    <h3 style="font-size: 10px">Puas</h3>
                                </div>
                            </label>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan">
                                <div>
                                    <h1 style="font-size: 50px">&#128512;</h1>
                                    <h3 style="font-size: 10px">Kurang Puas</h3>
                                </div>
                            </label>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan">
                                <div>
                                    <h1 style="font-size: 50px">&#128561;</h1>
                                    <h3 style="font-size: 10px">Tidak Puas</h3>
                                </div>
                            </label>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan">
                                <div>
                                    <h1 style="font-size: 50px">&#129324;</h1>
                                    <h3 style="font-size: 10px">Sangat Tidak Puas</h3>
                                </div>
                            </label>
                        </div>
                        <div class="form-group" style="margin-top: 10px">
                            <button class="btn btn-dark">Simpan</button>
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>