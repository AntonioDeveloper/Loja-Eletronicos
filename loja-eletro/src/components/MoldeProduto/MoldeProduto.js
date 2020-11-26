import React from 'react';

export default function MoldeProduto(props){
 return (
    <>
     <div className="col-lg-3 col-md-3 col-sm-6 mt-4 mb-4">
       <img src={require(`${props.imagem}`).default} alt="Foto do Produto" onmouseover='destaque(this)' onmouseout="tirarDestaque(this)" />
       <br />
       <p> 
         {props.descricao}
       </p>
       <hr />
       <strike>R$ 6.389,00</strike><br />
       <p>
          R$ {props.preco}
       </p>
       <br />
       <a href="detalhes_produto.php" class="btn btn-success mt-2 mb-2" >Comprar</a>
     </div>
    </>
 );

}