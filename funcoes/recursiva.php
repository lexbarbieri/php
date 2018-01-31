<?php
    $hierarquia = array(
        array(
            "nome_cargo"=>"CEO",
            "subordinados"=>array(
                //inicio diretor comercial
                array(
                    "nome_cargo"=>"Diretor Comercial",
                    "subordinados"=>array(
                        //inicio gerente de vendas
                        array(
                            "nome_cargo"=>"Gerente de vendas"
                        )
                        //fim gerente de vendas
                    )                    
                ),
                //fim diretor comercial
                //inicio diretor financeiro
                array(
                    "nome_cargo"=>"Diretor Financeiro",
                    "subordinados"=>array(
                        //inicio gerente de contas
                        array(
                            "nome_cargo"=>"Gerente de contas",
                            "subordinados"=>array(
                                //inicio supervisor
                                array(
                                    "nome_cargo"=>"Supervisor"
                                )
                                //termino supervisor
                            )
                        ),
                        //fim gerente de contas
                        //inicio gerente de compras
                        array(
                            "nome_cargo"=>"Gerente de compras",
                            "subordinados"=>array(
                                //inicio supervisor
                                array(
                                    "nome_cargo"=>"Supervisor",
                                    "subordinados"=>array(
                                        array(
                                            "nome_cargo"=>"Funcionario"
                                        )
                                    )
                                )
                                //termino supervisor
                            )
                        )
                        //termino gerente de compras
                    )
                )                
                //termino diretor financeiro
            )        
        )    
    );
        
function exibe($cargos){
    $html = "<ul>";
    
    foreach($cargos as $cargo){
        $html .= "<li>";
        
        $html .= $cargo["nome_cargo"];
        
        if(isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0){
            
           $html .= exibe($cargo["subordinados"]); 
        }
        
        $html .= "</li>";
    }
    
    $html .= "</ul>";
    
    return $html;
}    
        
echo exibe($hierarquia);
?>