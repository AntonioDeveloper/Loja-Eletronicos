import {Switch, Route} from 'react-router-dom';
import Home from './pages/home';
import Produtos from './pages/produtos';

export default function Rotas(){
  return(
    <Switch>
      <Route exact path="/" component={Home} />
      <Route exact path="/produtos.js" component={Produtos} />
    </Switch>
  );
}