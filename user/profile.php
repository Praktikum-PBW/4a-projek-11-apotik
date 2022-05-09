<section>
<div class="container p-5">
<div class="row">
    <div class="mx-auto">
        <div class="card" style="height: 530px; width:100%;">
            <div class="card-body " >
                            <img src="../assets/images/user.png" class="img-fluid rounded-circle px-5 py-1 mb-3">
                            <h3 class="px-5 py-1"><?= $_SESSION['nama_lengkap']?></h3>
                            <h3 class="text-muted px-5 py-1"><?= $_SESSION['status']?></h3>
                            <div class="row py-3">
                                <div class="col-md-2">
                                <a href="index.php?page=updateProfile"><button type="button" class="btn btn-primary rounded-pill"></span>Update Profile</button></a>
                                </div>
                                <div class="col-md-2">
                                <a href="index.php?page=changepw"><button type="button" class="btn btn-warning rounded-pill"></span>Ubah Password</button></a>
                                </div>
                            </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>