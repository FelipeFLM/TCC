<?php
ini_set('memory_limit', '512M');
ini_set('max_execution_time', '180');
$infos = array();
$file_name = "TURMAS.csv";
$fp = fopen("TURMAS.json", "a");
$dados ='{
	"TURMAS":{';
	echo $dados;
if (($handle = fopen($file_name, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, "|")) !== FALSE) {
		for ($i = 0; $i <= 78; $i++) {
		if ($data[$i] == ""){
				$data[$i] = "100";
			} 
		}

   $dados1 = '"ANO_CENSO":'. $data[0] . ',"PK_COD_TURMA":'. $data[1] . ',"NO_TURMA":"'. $data[2] . '","HR_INICIAL":"'. $data[3] . '","HR_INICIAL_MINUTO":"'. $data[4] . '","NU_DURACAO_TURMA":'. $data[5] . ',"NUM_MATRICULAS":'. $data[6] . ',"FK_COD_MOD_ENSINO":'. $data[7] . ',"FK_COD_ETAPA_ENSINO":'. $data[8] . ',"FK_COD_CURSO_PROF":'. $data[9] . ',"FK_COD_TIPO_TURMA":'. $data[10] . ',"ID_MAIS_EDUCACAO":'. $data[11] . ',"ID_DIA_SEMANA_DOMINGO":'. $data[12] . ',"ID_DIA_SEMANA_SEGUNDA":'. $data[13] . ',"ID_DIA_SEMANA_TERCA":'. $data[14] . ',"ID_DIA_SEMANA_QUARTA":'. $data[15] . ',"ID_DIA_SEMANA_QUINTA":'. $data[16] . ',"ID_DIA_SEMANA_SEXTA":'. $data[17] . ',"ID_DIA_SEMANA_SABADO":'. $data[18] . ',"FK_COD_TIPO_ATIVIDADE_1":'. $data[19] . ',"FK_COD_TIPO_ATIVIDADE_2":'. $data[20] . ',"FK_COD_TIPO_ATIVIDADE_3":'. $data[21] . ',"FK_COD_TIPO_ATIVIDADE_4":'. $data[22] . ',"FK_COD_TIPO_ATIVIDADE_5":'. $data[23] . ',"FK_COD_TIPO_ATIVIDADE_6":'. $data[24] . ',"ID_BRAILLE":'. $data[25] . ',"ID_RECURSOS_BAIXA_VISAO":'. $data[26] . ',"ID_PROCESSOS_MENTAIS":'. $data[27] . ',"ID_ORIENTACAO_MOBILIDADE":'. $data[28] . ',"ID_SINAIS":'. $data[29] . ',"ID_COM_ALT_AUMENT":'. $data[30] . ',"ID_ENRIQ_CURRICULAR":'. $data[31] . ',"ID_SOROBAN":'. $data[32] . ',"ID_INF_ACESSIVEL":'. $data[33] . ',"ID_PORT_ESC":'. $data[34] . ',"ID_AUT_ESCOLAR":'. $data[35] . ',"ID_QUIMICA":'. $data[36] . ',"ID_FISICA":'. $data[37] . ',"ID_MATEMATICA":'. $data[38] . ',"ID_BIOLOGIA":'. $data[39] . ',"ID_CIENCIAS":'. $data[40] . ',"ID_LINGUA_LITERAT_PORTUGUESA":'. $data[41] . ',"ID_LINGUA_LITERAT_INGLES":'. $data[42] . ',"ID_LINGUA_LITERAT_ESPANHOL":'. $data[43] . ',"ID_LINGUA_LITERAT_FRANCES":'. $data[44] . ',"ID_LINGUA_LITERAT_OUTRA":'. $data[45] . ',"ID_LINGUA_LITERAT_INDIGENA":'. $data[46] . ',"ID_ARTES":'. $data[47] . ',"ID_EDUCACAO_FISICA":'. $data[48] . ',"ID_HISTORIA":'. $data[49] . ',"ID_GEOGRAFIA":'. $data[50] . ',"ID_FILOSOFIA":'. $data[51] . ',"ID_ENSINO_RELIGIOSO":'. $data[52] . ',"ID_ESTUDOS_SOCIAIS":'. $data[53] . ',"ID_SOCIOLOGIA":'. $data[54] . ',"ID_INFORMATICA_COMPUTACAO":'. $data[55] . ',"ID_PROFISSIONALIZANTE":'. $data[56] . ',"ID_DISC_ATENDIMENTO_ESPECIAIS":'. $data[57] . ',"ID_DISC_DIVERSIDADE_SOCIO_CULT":'. $data[58] . ',"ID_LIBRAS":'. $data[59] . ',"ID_DISCIPLINAS_PEDAG":'. $data[60] . ',"ID_OUTRAS_DISCIPLINAS":'. $data[61] . ',"PK_COD_ENTIDADE":'. $data[62] . ',"FK_COD_ESTADO":'. $data[63] . ',"FK_COD_MUNICIPIO":'. $data[64] . ',"FK_COD_DISTRITO":'. $data[65] . ',"ID_LOCALIZACAO":'. $data[66] . ',"ID_DEPENDENCIA_ADM":'. $data[67] . ',"DESC_CATEGORIA_ESCOLA_PRIVADA":'. $data[68] . ',"ID_CONVENIADA_PP":'. $data[69] . ',"ID_TIPO_CONVENIO_PODER_PUBLICO":'. $data[70] . ',"ID_MANT_ESCOLA_PRIVADA_EMP":'. $data[71] . ',"ID_MANT_ESCOLA_PRIVADA_ONG":'. $data[72] . ',"ID_MANT_ESCOLA_PRIVADA_SIND":'. $data[73] . ',"ID_MANT_ESCOLA_PRIVADA_SIST_S":'. $data[74] . ',"ID_MANT_ESCOLA_PRIVADA_S_FINS":'. $data[75] . ',"ID_DOCUMENTO_REGULAMENTACAO":'. $data[76] . ',"ID_LOCALIZACAO_DIFERENCIADA":'. $data[77] . ',"ID_EDUCACAO_INDIGENA":'. $data[78] . ',';
	    echo $dados1;
	$escreve = fwrite($fp, $dados1);
	}
	$escreve = fwrite($fp, '}');
    fclose($handle);
}
?>

