<!DOCTYPE html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="CSS/bootstrap.css">
    </head>
    <body>
        <?php require("Layout\\header.php"); ?> 
        <div class="container">
            <div class="display-4" style="margin: 1rem; text-align: center">Daftar Sekarang</div>
            <form>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nama Depan &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nama Belakang</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>  
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">No. Telepon Rumah  (Dengan Kode Area) &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>  
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">No. Handphone &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div> 
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Alamat E-mail &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>                                                                  
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Konfirmasi Alamat E-mail &nbsp; <div style="color:red">*</div></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>                 
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                     </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Pilih...</option>
                        <option value="1">I - SD</option>
                        <option value="2">II - SD</option>
                        <option value="3">III - SD</option>
                        <option value="3">IV - SD</option>
                    </select>
                    </div>                         
                <button class="btn btn-primary">Submit</button>                           
            </form>
        </div>
        <?php require("Layout\\footer.php"); ?> 
    </body>
</html>