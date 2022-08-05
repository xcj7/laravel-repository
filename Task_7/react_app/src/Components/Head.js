import React from "react";
import { Link } from "react-router-dom";
const Head = () => {
    return(
        <div>
            <Link to="/">Product</Link>
            <Link to="/Product">Product</Link>
            <Link to="/contact">Contact</Link>
            <Link to="/color">Color State</Link>
            <Link to="/effect">Effect State</Link>
            <Link to="/posts">All Posts</Link>
            <Link to="/login">Login</Link>
            <Link to="/allproducts">Products</Link>
        </div>
    )
}
export default Head;