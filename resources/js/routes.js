import Home from './components/Home';
import Fish from './components/Fish';
import Plants from './components/Plants';
import Another from './components/Another';
import Aquariums from './components/Aquariums';
import Helpful from './components/Helpful';
import About from './components/About';
import Registration from './components/Registration';
import Authorization from './components/Authorization';


const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/fish",
        name: "Fish",
        component: Fish,
    },
    {
        path: "/plants",
        name: "Plants",
        component: Plants,
    },
    {
        path: "/another",
        name: "Another",
        component: Another,
    },
    {
        path: "/aquariums",
        name: "Aquariums",
        component: Aquariums,
    },
    {
        path: "/helpful",
        name: "Helpful",
        component: Helpful,
    },
    {
        path: "/about",
        name: "About",
        component: About,
    },
];

export default routes
