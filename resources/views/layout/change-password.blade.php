<div class="container-fluid">
    <div class="card">
      <div class="card-header bg-default">
        <h5 class="card-title m-0 text-white text-base"><i class="fas fa-lock mr-2"></i>Change password</h5>
      </div>
      <div class="card-body bg-default-1 py-5 d-flex align-items-center justify-center">
            <div class="card w-96">
              <div class="card-header d-flex justify-center flex-col align-items-center">
              <img src="{{asset('images/logo.png')}}" alt="" class="w-24 h-auto"> 
              <span class="color-default text-lg font-bold">Bulacan State University</span>
              </div>
              <div class="card-body d-flex flex-col justify-center align-items-center">
                    <h3 class="color-default font-bold text-xl"><i class="fas fa-lock alt mr-2"></i> Change Password</h3>
                    <input type="password" class="form-control border-red-400 mt-2" placeholder="Current Password" required>
                    <input type="password" class="form-control border-red-400 mt-2" placeholder="New Password" required>
                    <input type="password" class="form-control border-red-400 mt-2" placeholder="Re-type New Password" required>
              </div>
              <div class="card-footer d-flex justify-center">
                      <button type="submit" class="btn btn-success mr-2"><i class="fas fa-save mr-1 text-lg"></i> Update</button>
                      <button type="submit" class="btn btn-secondary"><i class="far fa-window-close mr-1 text-lg"></i> Cancel</button>
              </div>
            </div>
      </div>
    </div>
</div>