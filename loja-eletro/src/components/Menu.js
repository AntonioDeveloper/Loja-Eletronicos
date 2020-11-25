import React, { useState } from 'react';
import logo from '../imagens/logo.gif'
import { Collapse,
  Navbar,
  NavbarToggler,
  NavbarBrand,
  Nav,
  NavItem,
  NavLink
  } from 'reactstrap';

  const Menu = (props) => {
    const [isOpen, setIsOpen] = useState(false);
  
    const toggle = () => setIsOpen(!isOpen);
  
    return (
      <div>
        <Navbar color="light" light expand="md">
          <NavbarBrand href="index.js"><img src={logo} alt="Logo" width="100px"/></NavbarBrand>
          <NavbarToggler onClick={toggle} />
          <Collapse isOpen={isOpen} navbar>
            <Nav className="mr-auto" navbar>
              <NavItem>
                <NavLink href="index.js">Home</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="produtos.js">Produtos</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="lojas.js">Nossas Lojas</NavLink>
              </NavItem>
              
              <NavItem>
                <NavLink href="contato.js">Contato</NavLink>
              </NavItem>
              
              <NavItem>
                <NavLink href="cadastro.js">Cadastro</NavLink>
              </NavItem>
              
              <NavItem>
                <NavLink href="consultas.js">Consultas Gerais</NavLink>
              </NavItem>
            </Nav>           
          </Collapse>
        </Navbar>
      </div>
    );
  }
  
  export default Menu;

  