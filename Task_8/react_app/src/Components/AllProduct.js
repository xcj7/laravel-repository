import React, {useState, useEffect} from "react";
import { Link, useNavigate } from "react-router-dom";
import axios from "axios";
import { Table } from 'react-bootstrap';
import Detail from "./Detail";

const AllProduct = (props) =>{
    const[products, setProducts] = useState([]);
    const navigate = useNavigate('');
    

    useEffect(()=>{
        if (localStorage.getItem('user')){
        axios.get("http://127.0.0.1:8000/api/products/list")
        .then(resp=>{
        console.log(resp.data);
        setProducts(resp.data);
         }).catch(err=>{
        console.log(err);
    });

}else{
    alert(" please ,Login ");
    navigate('/login');
}


    },[]);

    return(
        <div>
            <h1>All Products</h1>

           
            <ul>
                {
                    products.map(p=>(
                        <Detail name={p.name} price={p.price} image={p.image}  />
                        // <li key={p.id}>{p.name}</li>
                    ))
                }
            </ul>


           








        </div>
    )
}
export default AllProduct;