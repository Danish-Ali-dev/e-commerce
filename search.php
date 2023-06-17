


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>

    function search_test()
    {
        var x=document.getElementById("search");
        const values = document.getElementById("values");
        const tbl = document.getElementById("tbl");
        axios.get(`/iTech_Zone/search1.php?search_id=${x.value}`)
        .then(function (response) {
            values.innerHTML = null;
            values.style.display = " block";
            // handle success
            const data = response.data;
            console.log(data.length);

            if(data.length>0)
            {
                
                let markup =  '';
                data.forEach(e2 => {
                    markup += `<div class="test form-control" data-name = "${e2.title}" data_id="${$e2.id}" data-price="${e2.sale_price}" data-image="${e2.image_1}"> ${e2.title}</div>`;
            })  

            values.insertAdjacentHTML("beforeend",markup);

            const tests = document.querySelectorAll('.test');
            tests.forEach(el => {
                el.addEventListener('click', (e) => {
                    let markup1 =  `<tr>
                                            <td>${sr}</td>
                                            <td>${e.target.dataset.title}</td>
                                            <td>${e.target.dataset.id}</td>
                                            <td>${e.target.dataset.price}</td>
                                            <td>${e.target.dataset.image}</td>
                                    </tr>`;
                                tbl.insertAdjacentHTML("beforeend",markup1); 
                                sr = sr + 1;  
                                values.style.display="none";
                                values.innerHTML="null";
                                
                })
            })

            }
            else{
                let markup ='';
                markup = `<div class="test form-control"> No Data Found </div>`;
                values.insertAdjacentHTML("beforeend",markup);
            }
           
            

        })
        .catch(function (error) {
            // handle error
            console.log(error);
        });

    }
</script>
    <title>Search</title>
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" name="search" id="search" onkeyup="search_test()" type="search" placeholder="Search" aria-label="Search">
    </form>
    
</nav>
</div>
<div id="values"></div>
<table>
    <thead>
        <tr>
            <th scope="col">Product Id</th>
            <th scope="col">Product Title</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Image 1</th>
        </tr>
    </thead>
    <tbody id="tbl">

    </tbody>
</table>
    
</body>
</html>
