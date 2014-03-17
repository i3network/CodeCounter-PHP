<?
/////////////////////////////////////////////////////////////////////
//  enVisage code counter
/////////////////////////////////////////////////////////////////////
//simple php counter to run through and count everything in a project :D

	$exclude_formats=array( //formats to ignore...
		'psd',
		'htaccess',
		'png',
		'jpg',
		'jpeg',
		'gif',
		'pdf',
		'doc',
		'ico',
		'sql',
		'rtf',
		'txt',
		'pages',
		);
	$ignore_dir=array( //directories to ignore...
		'envisage_ftp',
		);
	
/////////////////////////////////////////////////////////////////////
//initialise...
	set_time_limit(0); //don't allow the script to be killed...
	ini_set('memory_limit', '-1'); //we're going to use a lot of this...
	$troller=array('files','directories');
	$counter=array( //init counters and set them to 0
		'files'=>0,
		'directories'=>0,
		'lines'=>0,
		'characters'=>0,
		'spaces'=>0,
		);

function count_file($dir,$file){
	global $exclude_formats, $counter, $troller;
	$file_exp=explode(".",$file);
	$fmt=$file_ext[count($file_exp)];
	
	if(file_exists($dir."/".$file) && !in_array(strtolower($fmt),$exclude_formats)){
		$troller['files_bypath'][]=array('dir'=>$dir,'file'=>$file);
		$troller['files'][]=$dir."/".$file;
		$filecontent=file_get_contents($dir."/".$file);
		$lines=explode("\n",$filecontent);
		$counter['files']++;
		$counter['lines']=$counter['lines']+count($lines);
		$counter['characters']=$counter['characters']+strlen($filecontent);
		$counter['spaces']=$counter['spaces']+substr_count($filecontent," ");
		$counter['quotes_single']=$counter['quotes_single']+substr_count($filecontent,"'");
		$counter['quotes_double']=$counter['quotes_double']+substr_count($filecontent,'"');
		$counter['equals']=$counter['equals']+substr_count($filecontent,"=");
		$counter['dollarsign']=$counter['dollarsign']+substr_count($filecontent,'$');
		$counter['tabs']=$counter['tabs']+substr_count($filecontent,"\t");
		$counter['chars']['a']=$counter['chars']['a']+substr_count($filecontent,"a");
		$counter['chars']['b']=$counter['chars']['b']+substr_count($filecontent,"b");
		$counter['chars']['c']=$counter['chars']['c']+substr_count($filecontent,"c");
		$counter['chars']['d']=$counter['chars']['d']+substr_count($filecontent,"d");
		$counter['chars']['e']=$counter['chars']['e']+substr_count($filecontent,"e");
		$counter['chars']['f']=$counter['chars']['f']+substr_count($filecontent,"f");
		$counter['chars']['g']=$counter['chars']['g']+substr_count($filecontent,"g");
		$counter['chars']['h']=$counter['chars']['h']+substr_count($filecontent,"h");
		$counter['chars']['i']=$counter['chars']['i']+substr_count($filecontent,"i");
		$counter['chars']['j']=$counter['chars']['j']+substr_count($filecontent,"j");
		$counter['chars']['k']=$counter['chars']['k']+substr_count($filecontent,"k");
		$counter['chars']['l']=$counter['chars']['l']+substr_count($filecontent,"l");
		$counter['chars']['m']=$counter['chars']['m']+substr_count($filecontent,"m");
		$counter['chars']['n']=$counter['chars']['n']+substr_count($filecontent,"n");
		$counter['chars']['o']=$counter['chars']['o']+substr_count($filecontent,"o");
		$counter['chars']['p']=$counter['chars']['p']+substr_count($filecontent,"p");
		$counter['chars']['q']=$counter['chars']['q']+substr_count($filecontent,"q");
		$counter['chars']['r']=$counter['chars']['r']+substr_count($filecontent,"r");
		$counter['chars']['s']=$counter['chars']['s']+substr_count($filecontent,"s");
		$counter['chars']['t']=$counter['chars']['t']+substr_count($filecontent,"t");
		$counter['chars']['u']=$counter['chars']['u']+substr_count($filecontent,"u");
		$counter['chars']['v']=$counter['chars']['v']+substr_count($filecontent,"v");
		$counter['chars']['w']=$counter['chars']['w']+substr_count($filecontent,"w");
		$counter['chars']['x']=$counter['chars']['x']+substr_count($filecontent,"x");
		$counter['chars']['y']=$counter['chars']['y']+substr_count($filecontent,"y");
		$counter['chars']['z']=$counter['chars']['z']+substr_count($filecontent,"z");
		$counter['chars']['A']=$counter['chars']['A']+substr_count($filecontent,"A");
		$counter['chars']['B']=$counter['chars']['B']+substr_count($filecontent,"B");
		$counter['chars']['C']=$counter['chars']['C']+substr_count($filecontent,"C");
		$counter['chars']['D']=$counter['chars']['D']+substr_count($filecontent,"D");
		$counter['chars']['E']=$counter['chars']['E']+substr_count($filecontent,"E");
		$counter['chars']['F']=$counter['chars']['F']+substr_count($filecontent,"F");
		$counter['chars']['G']=$counter['chars']['G']+substr_count($filecontent,"G");
		$counter['chars']['H']=$counter['chars']['H']+substr_count($filecontent,"H");
		$counter['chars']['I']=$counter['chars']['I']+substr_count($filecontent,"I");
		$counter['chars']['J']=$counter['chars']['J']+substr_count($filecontent,"J");
		$counter['chars']['K']=$counter['chars']['K']+substr_count($filecontent,"K");
		$counter['chars']['L']=$counter['chars']['L']+substr_count($filecontent,"L");
		$counter['chars']['M']=$counter['chars']['M']+substr_count($filecontent,"M");
		$counter['chars']['N']=$counter['chars']['N']+substr_count($filecontent,"N");
		$counter['chars']['O']=$counter['chars']['O']+substr_count($filecontent,"O");
		$counter['chars']['P']=$counter['chars']['P']+substr_count($filecontent,"P");
		$counter['chars']['Q']=$counter['chars']['Q']+substr_count($filecontent,"Q");
		$counter['chars']['R']=$counter['chars']['R']+substr_count($filecontent,"R");
		$counter['chars']['S']=$counter['chars']['S']+substr_count($filecontent,"S");
		$counter['chars']['T']=$counter['chars']['T']+substr_count($filecontent,"T");
		$counter['chars']['U']=$counter['chars']['U']+substr_count($filecontent,"U");
		$counter['chars']['V']=$counter['chars']['V']+substr_count($filecontent,"V");
		$counter['chars']['W']=$counter['chars']['W']+substr_count($filecontent,"W");
		$counter['chars']['X']=$counter['chars']['X']+substr_count($filecontent,"X");
		$counter['chars']['Y']=$counter['chars']['Y']+substr_count($filecontent,"Y");
		$counter['chars']['Z']=$counter['chars']['Z']+substr_count($filecontent,"Z");
		$counter['chars']['1']=$counter['chars']['1']+substr_count($filecontent,"1");
		$counter['chars']['2']=$counter['chars']['2']+substr_count($filecontent,"2");
		$counter['chars']['3']=$counter['chars']['3']+substr_count($filecontent,"3");
		$counter['chars']['4']=$counter['chars']['4']+substr_count($filecontent,"4");
		$counter['chars']['5']=$counter['chars']['5']+substr_count($filecontent,"5");
		$counter['chars']['6']=$counter['chars']['6']+substr_count($filecontent,"6");
		$counter['chars']['7']=$counter['chars']['7']+substr_count($filecontent,"7");
		$counter['chars']['8']=$counter['chars']['8']+substr_count($filecontent,"8");
		$counter['chars']['9']=$counter['chars']['9']+substr_count($filecontent,"9");
		$counter['chars']['0']=$counter['chars']['0']+substr_count($filecontent,"0");
		$counter['chars']['!']=$counter['chars']['!']+substr_count($filecontent,"!");
		$counter['chars']['@']=$counter['chars']['@']+substr_count($filecontent,"@");
		$counter['chars']['#']=$counter['chars']['#']+substr_count($filecontent,"#");
		$counter['chars']['$']=$counter['chars']['$']+substr_count($filecontent,"$");
		$counter['chars']['%']=$counter['chars']['%']+substr_count($filecontent,"%");
		$counter['chars']['^']=$counter['chars']['^']+substr_count($filecontent,"^");
		$counter['chars']['&']=$counter['chars']['&']+substr_count($filecontent,"&");
		$counter['chars']['*']=$counter['chars']['*']+substr_count($filecontent,"*");
		$counter['chars']['(']=$counter['chars']['(']+substr_count($filecontent,"(");
		$counter['chars'][')']=$counter['chars'][')']+substr_count($filecontent,")");
		$counter['chars']['_']=$counter['chars']['_']+substr_count($filecontent,"_");
		$counter['chars']['+']=$counter['chars']['+']+substr_count($filecontent,"+");
		$counter['chars']['-']=$counter['chars']['-']+substr_count($filecontent,"-");
		$counter['chars']['=']=$counter['chars']['=']+substr_count($filecontent,"=");
		$counter['chars']['[']=$counter['chars']['[']+substr_count($filecontent,"[");
		$counter['chars'][']']=$counter['chars'][']']+substr_count($filecontent,"]");
		$counter['chars']['{']=$counter['chars']['{']+substr_count($filecontent,"{");
		$counter['chars']['}']=$counter['chars']['}']+substr_count($filecontent,"}");
		$counter['chars']['|']=$counter['chars']['|']+substr_count($filecontent,"|");
		$counter['chars']['\\']=$counter['chars']['\\']+substr_count($filecontent,"\\");
		$counter['chars']['/']=$counter['chars']['/']+substr_count($filecontent,"/");
		$counter['chars']['<']=$counter['chars']['<']+substr_count($filecontent,"<");
		$counter['chars']['>']=$counter['chars']['>']+substr_count($filecontent,">");
		$counter['chars'][',']=$counter['chars'][',']+substr_count($filecontent,",");
		$counter['chars']['.']=$counter['chars']['.']+substr_count($filecontent,".");
		$counter['chars'][';']=$counter['chars'][';']+substr_count($filecontent,";");
		$counter['chars']['~']=$counter['chars']['~']+substr_count($filecontent,"~");
		$counter['chars']['`']=$counter['chars']['`']+substr_count($filecontent,"`");
	}else{
		return 0;
	}
	
}
function open_dir($dir){
	global $exclude_formats, $counter, $troller, $ignore_dir;
	if(!$handle = opendir($dir)){
		echo "Unable to open directory: ".$dir."<br>\n";
	}else{
		$troller['directories'][]=$dir;
		while (false !== ($file = readdir($handle))){
			if($file=="..." || $file=="." || $file==".." || $file==".DS_Store" || $file==".com.apple.timemachine.supported" || $file==".git" || $file=="--INFO--"){
				//ignore these files...
			}else{
				if(is_dir($dir."/".$file) && !in_array(strtolower($file),$ignore_dir)){
					$counter['directories']++;
					open_dir($dir."/".$file);
				}else if(file_exists($dir."/".$file)){
					count_file($dir,$file);
				}else{
					echo "Ignore: ".$dir."/".$file;
				}
			}
		}
	}
}
open_dir("..");
echo "\n\n\n-------------\n\n";
print_r($counter);
echo "-------------\n\n";
print_r($troller);
?>