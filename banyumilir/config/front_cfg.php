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
  <div class="card-body">
      <h5 class="card-title">Config Packet</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
</div>

<div class="container">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon01">Upload video or Image Display</span>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
  </div>
</div>

<div class="container">
    <div class="row mb-3">
        <div class="col-sm border border-primary">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload Category Image</span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>

        </div>
        <div class="col-sm border border-primary ">
            Input Category
        </div>

        <div class="col-sm border border-primary">
            <input name="text_cfg" type="text" class="form-control" >
        </div>

        <div class="col-sm border border-primary">
          <button type="button" class="btn btn-primary btn-sm">Insert</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-3">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>diving</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>snorkling</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>wisata dolphine</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>


<div class="container">
  <div class="card-body">
      <h5 class="card-title">Insert Packet</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm border border-primary">1</div>
        <div class="col-sm border border-primary ">
            <select name="select_cfg" class="form-control ">

                <option selected>Choose...</option>
                <option value="title">Title</option>
                <option value="subtitle">Sub-Title</option>
                <option value="price">Price</option>
                <option value="additional">Additional</option>

            </select>
        </div>

        <div class="col-sm border border-primary">
            <input name="text_cfg" type="text" class="form-control" >
        </div>

    </div>

    <div class="row">
        <div class="col-sm border border-primary">1</div>
        <div class="col-sm border border-primary ">
            <select name="select_cfg" class="form-control ">

                <option selected>Choose...</option>
                <option value="title">Title</option>
                <option value="subtitle">Sub-Title</option>
                <option value="price">Price</option>
                <option value="additional">Additional</option>

            </select>
        </div>

        <div class="col-sm border border-primary">
            <input name="text_cfg" type="text" class="form-control" >
        </div>

    </div>

    <div class="row">
        <div class="col-sm border border-primary">1</div>
        <div class="col-sm border border-primary ">
            <select name="select_cfg" class="form-control ">

                <option selected>Choose...</option>
                <option value="title">Title</option>
                <option value="subtitle">Sub-Title</option>
                <option value="price">Price</option>
                <option value="additional">Additional</option>

            </select>
        </div>

        <div class="col-sm border border-primary">
            <input name="text_cfg" type="text" class="form-control" >
        </div>

    </div>

    <div class="row">
        <div class="col-sm border border-primary">1</div>
        <div class="col-sm border border-primary ">
            <select name="select_cfg" class="form-control ">

                <option selected>Choose...</option>
                <option value="title">Title</option>
                <option value="subtitle">Sub-Title</option>
                <option value="price">Price</option>
                <option value="additional">Additional</option>

            </select>
        </div>

        <div class="col-sm border border-primary">
            <input name="text_cfg" type="text" class="form-control" >
        </div>

    </div>

    <div class="row">
      <div class="col-sm border border-primary">
        <button type="button" class="btn btn-primary">Primary</button>
      </div>
    </div>

    
</div>

<div class="container">
    <div class="row mb-3">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            <th scope="col">Packet</th>
            <th scope="col">Details</th>
            <th scope="col">Price</th>
            <th scope="col">Add</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>diving</td>
            <td>diving</td>
            <td>diving</td>
            <td>diving</td>
            <td>diving</td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>snorkling</td>
            <td>diving</td>
            <td>diving</td>
            <td>diving</td>
            <td>diving</td>

          </tr>
          <tr>
            <th scope="row">3</th>
            <td>wisata dolphine</td>
            <td>diving</td>
            <td>diving</td>
            <td>diving</td>
            <td>diving</td>

          </tr>
        </tbody>
      </table>
    </div>
</div>

</body>
</html>