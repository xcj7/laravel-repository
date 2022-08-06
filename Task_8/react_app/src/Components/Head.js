import React from "react";
import AllProduct from './AllProduct';
import Product from './Product';
import { Link } from "react-router-dom";
const Head = () => {
    return(
        <div>
           
            <Link to="/product">||Product add ||</Link>
            <Link to="/allproduct">|| Products show ||</Link>
            <Link to="/login">|| Login ||</Link>
            <Link to="/signout">|| signout ||</Link>
         
        </div>
    )
}
export default Head;


// <!DOCTYPE html>
// <html lang="en">

// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
//     <title>Document</title>
// </head>

// <body onload="load()">
//     <h3>Products List</h3>
//     <a  class="btn-success" href="APIPost.html">Add product</a><br><br>
//     <table id="products" class="table"></table>
   
//     <script>
//         var obj;

//         async function load() {
//             const response = await fetch("http://127.0.0.1:8000/api/products/list");
//             var data = await response.json();
//             show(data);
//         }


//         function show(data) {
//             let table = `
//             <tr>
//               <th>ID</th>
//               <th> Name</th>
//               <th>Price</th>
//               <th>Image</th>
//             </tr>  
//         `;
//            data.map((r)=>{
//                 table += `<tr>
//                 <td>${r.id}</td>
//                 <td>${r.name}</td>
//                 <td>${r.price} taka/unit</td>
//                 <td>${r.image}</td>
//             </tr>`;
//             });
//             document.getElementById('products').innerHTML = table;
//         }
//     </script>

// <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
// <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

// </body>
// </body>

// </html> 
