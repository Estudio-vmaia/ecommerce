<script>

precos = [];
const reducer = (accumulator, currentValue) => accumulator + currentValue;

//ADD PRODUTO 
function addProd(id){
    //console.log('addProd - id = '+id);

    $.ajax({
        url: 'AddProduto.php?id='+id
    }).done(function(data) { 
        $('#listProd').append(data);           
        valor = document.getElementById('price_'+id).innerText;        
       
        valor = valor.replace(",", ".");
        valor = parseFloat(valor.replace("R$ ", ""));

        //console.log(valor);
        precos.push(valor);

        NumCarrinho();

        PrecoCarrinho();
        
    });
}


//REMOVE PRODUTO
function removeProd(id){
    
    //console.log('removeProd - id = '+id);
    valor = document.getElementById('price_'+id).innerText;
    ValorDesc = document.getElementById('DescApli').innerText;
    Tipo = document.getElementById('DescTipo').innerText;

    removeItem(precos, valor);

    if(precos.length == 0){
        precos.push(0);
    }

    PrecoCarrinho(); 

    NumCarrinho();

    $('#LI-' + id).closest('li').remove();
    
}

function NumCarrinho()
{
    document.getElementById('countItensCar').innerText = precos.length;

    if(precos.length > 1){
        document.getElementById('countItensCa2').innerText = precos.length+' Itens';    
    }
    else{
        document.getElementById('countItensCa2').innerText = precos.length+' Item';
    }
}

//REMOVE ARRAY PRECOS
function removeItem(precos, value) {
    //console.log('removeItem');
    //console.log(value);

    value = value.replace(",", ".");
    value = parseFloat(value.replace("R$ ", ""));

    var index = precos.indexOf(value);
    if (index > -1) {
        precos.splice(index, 1);
        //console.log(index);
    }
  
  return precos;
}

/* PREÇO CARRINHO */
function PrecoCarrinho()
{
    //console.log(' - PrecoCarrinho - ');

    ValorTotal = precos.reduce(reducer);

    //console.log(ValorTotal);

    ValorTotal = VerificaCupom(ValorTotal);
}

/* FUNÇAO PARA CALCULAR O DESCONTO */
function CalcDesconto(valor){
    
    //console.log(' - CalcDesconto - ');
    //console.log('valor = '+valor);
    
    ValorCarrinho = valor;

    DescTipo = document.getElementById('DescTipo').innerText;
    DescApli = document.getElementById('DescApli').innerHTML;
    
    //console.log('DescTipo = '+DescTipo);
    //console.log('DescApli = '+DescApli);

    if(ValorCarrinho != 0 && DescTipo != ''){
        
        //console.log('entrou desconto');

        if(DescTipo == 'percent'){
        var result = ValorCarrinho - (ValorCarrinho / 100 * DescApli);															        
        }
        if(DescTipo == 'fixo'){
            var result = ValorCarrinho - DescApli;
        }

        ValorCarrinho = result; 

        document.getElementById('OldPrice').innerText = 'R$ '+valor;
        document.getElementById('OldPrice').style.display = 'block';
    }

    return ValorCarrinho;
}

/* SETA VALOR EM REAL */
function numberToReal(numero) {
    var numero = numero.toFixed(2).split('.');
    numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}


/* Script Cupom */


function VerificaCumpomPGTO()
{
    var botnPGTO = document.getElementById('BtPgto').innerText;
    var cpDesconto = document.getElementById('cpDesconto').value;
    var PriceTotal = document.getElementById('PriceTotal').innerText;
    var CupomApli = document.getElementById('CupomApli').innerText;
    
    if(PriceTotal != 'R$ 0')
    {
        if(cpDesconto != '')
        {
            document.getElementById('BtPgto').innerHTML = 'Aplicar Desconto';
        }
        else{
            document.getElementById('BtPgto').innerHTML = 'Pagamento';
        }

        if(CupomApli != '')
        {
            document.getElementById('BtPgto').innerHTML = 'Pagamento';
        }
    }
    else{
        document.getElementById('BtPgto').innerHTML = 'Carrinho vazio';
    }
    
}

function VerifPGTO(){

    CupomApli = document.getElementById('CupomApli').innerHTML;
    
    if(CupomApli != '')
    {
        //direciona para pgto
        //console.log(' ---- Direciona para pagamento ---');
    }
    else{
        PrecoCarrinho();
    }
}


function VerificaCupom(ValorTotal)
{
    //console.log(' - VerificaCupom - ');
    var cpDesconto = $('#cpDesconto').val();

        //console.log('cpDesconto = '+cpDesconto);

        $.ajax({
            url: 'cupons.php?cpGet='+cpDesconto,
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                var len = response.length;

                for(var i=0; i<len; i++){
                    var id = response[i].id;
                    var Cupom = response[i].Cupom;
                    var Tipo = response[i].Tipo;
                    var ValorDesc = response[i].Valor;
                }

                //console.log('Tipo DB = '+Tipo);
                //console.log('ValorDesc DB = '+ValorDesc);

                if(id != '')
                {
                    document.getElementById('DescApli').innerHTML =  ValorDesc;
                    document.getElementById('DescTipo').innerHTML =  Tipo;

                    if(Tipo == 'percent'){
                        DescrCupom = Cupom+' (-'+ValorDesc+'%)';
                    }

                    if(Tipo == 'fixo'){                    
                        DescrCupom = Cupom+' (- R$ '+ValorDesc+')';
                    }

                    //console.log(DescrCupom);

                    //result = '<span style="color:#F7941D;">R$ '+result+'</span>';
                    
                    document.getElementById('CupomApli').innerText = DescrCupom;
                    document.getElementById('CupomApli').style.display = 'block';
                    document.getElementById('cpDesconto').style.display = 'none';
                    document.getElementById('cpRetorno').style.display = 'none';
                    document.getElementById('BtPgto').innerHTML = 'Pagamento';            
                                        
                }
                else{
                    if(cpDesconto != '')
                    {
                        document.getElementById('cpRetorno').style.display = 'block';
                    }
                }
            },
            complete: function () {
                console.log(' -- VerificaCupom final --');
                ValorTotal = CalcDesconto(ValorTotal);
                //return ValorTotal;

                ValorTotal = numberToReal(ValorTotal);
        
                document.getElementById('PriceTotal').innerText = ValorTotal; 
               
            }
        });
}

</script>
