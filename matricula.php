<?php
ini_set('memory_limit', '512M');
ini_set('max_execution_time', '180');
$infos = array();
$file_name = "MATRICULA_CO.csv";
$fp = fopen("matricula.json", "a");
$dados ='{
	"matriculas":{';
	echo $dados;
if (($handle = fopen($file_name, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, "|")) !== FALSE) {
		if ($data[0]== ""){ $data[0] = "100";} 
for ($i = 0; $i <= 84; $i++) {
		if ($data[$i] == ""){
				$data[$i] = "100";
			} 
		}

    $dados1 = '"ANO_CENSO":'. $data[0] . ',"PK_COD_MATRICULA":'. $data[1] . ',"FK_COD_ALUNO":'. $data[2] . ',"NU_DIA":'. $data[3] . ',"NU_MES":'. $data[4] . ',"NU_ANO":'. $data[5] . ',"NUM_IDADE_REFERENCIA":'. $data[6] . ',"NUM_IDADE":'. $data[7] . ',"NU_DUR_ESCOLARIZACAO":'. $data[8] . ',"NU_DUR_ATIV_COMP_MESMA_REDE":'. $data[9] . ',"NU_DUR_ATIV_COMP_OUTRAS_REDES":'. $data[10] . ',"NUM_DUR_AEE_MESMA_REDE":'. $data[11] . ',"NUM_DUR_AEE_OUTRAS_REDES":'. $data[12] . ',"TP_SEXO":'. $data[13] . ',"TP_COR_RACA":'. $data[14] . ',"TP_NACIONALIDADE":'. $data[15] . ',"FK_COD_PAIS_ORIGEM":'. $data[16] . ',"FK_COD_ESTADO_NASC":'. $data[17] . ',"FK_COD_MUNICIPIO_DNASC":'. $data[18] . ',"FK_COD_ESTADO_END":'. $data[19] . ',"FK_COD_MUNICIPIO_END":'. $data[20] . ',"ID_ZONA_RESIDENCIAL":'. $data[21] . ',"ID_TIPO_ATENDIMENTO":'. $data[22] . ',"ID_N_T_E_P":'. $data[23] . ',"ID_RESPONSAVEL_TRANSPORTE":'. $data[24] . ',"ID_TRANSP_VANS_KOMBI":'. $data[25] . ',"ID_TRANSP_MICRO_ONIBUS":'. $data[26] . ',"ID_TRANSP_ONIBUS":'. $data[27] . ',"ID_TRANSP_BICICLETA":'. $data[28] . ',"ID_TRANSP_TR_ANIMAL":'. $data[29] . ',"ID_TRANSP_OUTRO_VEICULO":'. $data[30] . ',"ID_TRANSP_EMBAR_ATE5":'. $data[31] . ',"ID_TRANSP_EMBAR_5A15":'. $data[32] . ',"ID_TRANSP_EMBAR_15A35":'. $data[33] . ',"ID_TRANSP_EMBAR_35":'. $data[34] . ',"ID_TRANSP_TREM_METRO":'. $data[35] . ',"ID_POSSUI_NEC_ESPECIAL":'. $data[36] . ',"ID_TIPO_NEC_ESP_CEGUEIRA":'. $data[37] . ',"ID_TIPO_NEC_ESP_BAIXA_VISAO":'. $data[38] . ',"ID_TIPO_NEC_ESP_SURDEZ":'. $data[39] . ',"ID_TIPO_NEC_ESP_DEF_AUDITIVA":'. $data[40] . ',"ID_TIPO_NEC_ESP_SURDO_CEGUEIRA":'. $data[41] . ',"ID_TIPO_NEC_ESP_DEF_FISICA":'. $data[42] . ',"ID_TIPO_NEC_ESP_DEF_MENTAL":'. $data[43] . ',"ID_TIPO_NEC_ESP_DEF_MULTIPLAS":'. $data[44] . ',"ID_TIPO_NEC_ESP_AUTISMO":'. $data[45] . ',"ID_TIPO_NEC_ESP_ASPERGER":'. $data[46] . ',"ID_TIPO_NEC_ESP_RETT":'. $data[47] . ',"ID_TIPO_NEC_ESP_TDI":'. $data[48] . ',"ID_TIPO_NEC_ESP_SUPERDOTACAO":'. $data[49] . ',"ID_TIPO_REC_ESP_LEDOR":'. $data[50] . ',"ID_TIPO_REC_ESP_TRANSCRICAO":'. $data[51] . ',"ID_TIPO_REC_ESP_INTERPRETE":'. $data[52] . ',"ID_TIPO_REC_ESP_LIBRAS":'. $data[53] . ',"ID_TIPO_REC_ESP_LABIAL":'. $data[54] . ',"ID_TIPO_REC_ESP_BRAILLE":'. $data[55] . ',"ID_TIPO_REC_ESP_AMPLIADA_16":'. $data[56] . ',"ID_TIPO_REC_ESP_AMPLIADA_20":'. $data[57] . ',"ID_TIPO_REC_ESP_AMPLIADA_24":'. $data[58] . ',"ID_TIPO_REC_ESP_NENHUM":'. $data[59] . ',"ID_INGRESSO_FEDERAIS":'. $data[60] . ',"FK_COD_MOD_ENSINO":'. $data[61] . ',"FK_COD_ETAPA_ENSINO":'. $data[62] . ',"ID_ETAPA_AGREGADA_MAT":'. $data[63] . ',"PK_COD_TURMA":'. $data[64] . ',"FK_COD_CURSO_PROF":'. $data[65] . ',"COD_UNIFICADA":'. $data[66] . ',"FK_COD_TIPO_TURMA":'. $data[67] . ',"PK_COD_ENTIDADE":'. $data[68] . ',"FK_COD_ESTADO_ESCOLA":'. $data[69] . ',"COD_MUNICIPIO_ESCOLA":'. $data[70] . ',"FK_CODIGO_DISTRITO":'. $data[71] . ',"ID_LOCALIZACAO_ESC":'. $data[72] . ',"ID_DEPENDENCIA_ADM_ESC":'. $data[73] . ',"DESC_CATA_ESCOLA_PRIV":'. $data[74] . ',"ID_CONVENIADA_PP_ESC":'. $data[75] . ',"ID_TIPO_CONVENIO_PODER_PUBLICO":'. $data[76] . ',"ID_MANT_ESCOLA_PRIVADA_EMP":'. $data[77] . ',"ID_MANT_ESCOLA_PRIVADA_ONG":'. $data[78] . ',"ID_MANT_ESCOLA_PRIVADA_SIND":'. $data[79] . ',"ID_MANT_ESCOLA_PRIVADA_SIST_S":'. $data[80] . ',"ID_MANT_ESCOLA_PRIVADA_S_FINS":'. $data[81] . ',"ID_DOCUMENTO_REGULAMENTACAO":'. $data[82] . ',"ID_LOCALIZACAO_DIFERENCIADA":'. $data[83] . ',"ID_EDUCACAO_INDIGENA":'. $data[84] . ",";
	echo $dados1 . "<br>";
	$escreve = fwrite($fp, $dados1);
	}
	$escreve = fwrite($fp, '}');
    fclose($handle);
}
?>

