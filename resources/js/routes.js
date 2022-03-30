import Home from './components/Home';
import News from './components/News';
import FishSpecies from './components/FishSpecies';
import PlantsSpecies from './components/PlantsSpecies';
import AnotherSpecies from './components/AnotherSpecies';
import Aquariums from './components/Aquariums';
import Helpful from './components/Helpful';
import About from './components/About';
import PetMembers from "./components/PetMembers";
import plantsMembers from "./components/PlantsMembers";


const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/news",
        name: "News",
        component: News,
    },
    {
        path: "/fish",
        name: "Fish",
        component: FishSpecies,
    },
    {
        path: "/plants",
        name: "Plants",
        component: PlantsSpecies,
    },
    {
        path: "/another",
        name: "Another",
        component: AnotherSpecies,
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
    {
        path: "/petMembers",
        name: "PetMember",
        component: PetMembers,
    },
    {
        path: '/plantsMembers',
        name: "PlantsMember",
        component: plantsMembers
    }
];

export default routes
