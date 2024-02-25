import {createBrowserRouter} from 'react-router-dom';
import NotFound from "./views/NotFound.jsx";
import Login from "./views/Login.jsx";
import Signup from "./views/Signup.jsx";
import Users from "./views/Users.jsx";

const router = createBrowserRouter([
    {
        path: '/login',
        element: <Login />
    },
    {
        path: '/signup',
        element: <Signup />
    },
    {
        path: '/users',
        element: <Users />
    },
    {
        path: '*',
        element: <NotFound />
    },
])

export default router;
