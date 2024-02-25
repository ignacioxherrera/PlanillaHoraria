import React from "react";
import {createRoot} from 'react-dom/client';
export default function Prueba() {
    return(
        <>
            <h1>Prueba</h1>
        </>
    )
}

if(document.getElementById('prueba')){
    createRoot(document.getElementById('prueba')).render(<Prueba/>);
}
