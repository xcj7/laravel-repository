import React, {useState, userEffect} from "react";
import axios from "axios";
import { Link, useNavigate } from "react-router-dom";

const Product = ()=>{
    let[price, setPrice]= useState("");
    let[name, setName] = useState("");
    let[image, setImage] =useState("");
    const navigate = useNavigate('');
    
    
    if (localStorage.getItem('user')){
        // navigate('/login');

        const productSubmit= ()=>{


            //    if (localStorage.getItem('user')){
            //        // navigate('/login');
            //     }else{
            //         navigate('/login');
            //     }
        
        
                var obj = {name: name, price: price,image: image};
                axios.post("http://127.0.0.1:8000/api/products/list",obj)
                .then(resp=>{
                    var token = resp.data;
                    console.log(token);
        
        
                    // var user = {userId: token.userid, access_token:token.token};
                    // localStorage.setItem('user',JSON.stringify(user));
        
        
                    // console.log(localStorage.getItem('user'));
                }).catch(err=>{
                    console.log(err);
                });
        
        
            }
            return(
                <div>
               
        
                    <form >
          
          <div className="form-group">
              <label>Product Name:</label>
              <input type="text" value={name} onChange={(e)=>setName(e.target.value)}></input>
          </div>
        
          <div className="form-group">
              <label>price:</label>
              <input type="text"  value={price} onChange={(e)=>setPrice(e.target.value)}></input>
          </div>
        
          <div className="form-group">
              <strong>Image:</strong>
              <input type="file" value={image} onChange={(e)=>setImage(e.target.value)}></input>
          </div>
        
        
        
        </form>
        
        
        
                        <button onClick={productSubmit}>Add</button>
                </div>
        
            )

     }else{
         navigate('/login');
     }


 
}
export default Product;  

//      $product->name = $req->name;
// $product->price = $req->price;
// $product->image = $req->image;