package com.br.projetoat.dao;

public class Configuracao {
    //Endereço que vai ser hospedado o Script php
    public static final String host = "http://matheuswebbilac.esy.es/";

    //Endereços dos scripts para fazer o CRUD
    public static final String URL_VALIDAR_PIN = host+"validarpin.php?id=";
    public static final String URL_ADICIONAR_NOTA = host+"adicionarnota.php";
    public static final String URL_UPDATE_ATENDIMENTO = host+"updateatendimento.php";

    //Constantes chaves que serao utilizados para enviar dados para os scripts php
    public static final String KEY_NOTA_ID = "id_nota";
    public static final String KEY_CODIGO = "codigo";
    public static final String KEY_NOTA_ATENDIMENTO = "atendente";
    public static final String KEY_NOTA_TEMPO = "tempo_espera";
    public static final String KEY_NOTA_PROBLEMA = "problema_resolvido";

    //Tags JSON
    public static final String TAG_JSON_ARRAY = "result";
    public static final String TAG_ID = "codigo";
    public static final String TAG_ERROR = "error";


    //PIN que sera passado via internet
    public static final String PIN = "emp_id";


}
