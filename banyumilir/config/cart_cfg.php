<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>config</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <!--style>.form-icon,.page-header .logo{display:grid;place-content:center}.page-header .logo,body{background-color:var(--grey)}:root{--accent:#A7A735;--primary:#095265;--grey:#E6E6E6;--white:#FFFFFF}body{font-family:Inter,sans-serif;font-size:14px}.text-small{font-size:12px;opacity:.65}.text-grey{color:var(--grey)}.form-control,.form-select,.page-body{color:var(--primary)}.grid-2{display:grid;grid-template-columns:repeat(2,minmax(0,1fr))}.form-group{position:relative}.form-icon{position:absolute;top:0;bottom:0;padding:12px}.form-icon-left{padding-left:40px!important}.form-control{padding:.5rem 1rem;border-radius:10px;font-size:14px}.form-select{padding:.5rem 2.5rem .5rem 1rem;border-radius:10px;font-size:14px}.btn{--bs-btn-padding-x:3rem;--bs-btn-padding-y:.5rem;--bs-btn-font-size:14px}.btn-primary{--bs-btn-bg:var(--primary);--bs-btn-border-color:var(--primary);--bs-btn-hover-bg:var(--primary);--bs-btn-hover-border-color:var(--primary)}.page-header .logo{padding:0 1.5rem;width:20%}.page-header .logo img{height:100px}.page-header .title{flex:1 1 auto;padding:2rem 3rem;text-align:end;background-color:var(--accent);color:var(--white);border-radius:0 0 0 3rem/0 0 0 6rem}.page-body{padding:6rem 3rem 3rem;background-color:var(--white);border-radius:25% 0 0/8rem 0 0}.table{--bs-table-color:var(--primary)!important;font-size:14px}.table-accent{--bs-table-bg:var(--primary)!important;--bs-table-color:var(--white)!important}.sim-section{margin-top:2rem;padding-top:2rem;border-top:var(--bs-border-width) solid #c1d3d8}.sim-footer{padding:1.5rem;background-color:var(--grey);text-align:center;font-size:14px}@media (max-width:576px){.container{--bs-gutter-x:0}.page-header .logo{padding:0 .5rem;width:25%}.page-header .logo img{height:60px}.page-header .title{padding:1.5rem}.page-header .title h4{font-size:17px}.page-body{padding:1rem;border-radius:0}.table{font-size:13px}}</style-->
</head>
<body>

<div class="container">

  <div class="row mb-3">
    <div class="col-sm border border-primary">
      <div class="form-group">
        <h5 class="card-title">Config category</h5>
            <select class="custom-select">
              <option selected>Open this select menu</option>
              <option value="1">Diving</option>
              <option value="2">Snorkling</option>
              <option value="3">Wisata Dolphine</option>
            </select>     
      </div>     
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm border border-primary">
      <div class="form-group">
        <h5 class="card-title">Config Captain</h5>
        <div class="col-sm border border-primary">
          <label>Enble</label>
          <input type="radio"  value="enable" id="cfg_captain" name="cfg_captain" >
          <label>Disable</label>       
          <input type="radio"  value="disable" id="cfg_captain" name="cfg_captain" checked>
        </div>       
      </div>     

      <div class="form-group">
        <h5 class="card-title">Config Captain Profile</h5>
        <div class="col-sm border border-primary">
          <label>Enble</label>
          <input type="radio"  value="enable" id="cfg_profile" name="cfg_profile" >
          <label>Disable</label>       
          <input type="radio"  value="disable" id="cfg_profile" name="cfg_profile" checked>
        </div>       
      </div>  
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm border border-primary">
      <div class="form-group">
      <h5 class="card-title">Config Additional Packet</h5>
        <input type="text" class="form-control" id="name" placeholder="Enter additional name">
        <input type="text" class="form-control" id="price" placeholder="Enter price">
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm border border-primary">
      <button type="button" class="btn btn-primary">set</button>
    </div>
  </div>

</div>


</body>
</html>