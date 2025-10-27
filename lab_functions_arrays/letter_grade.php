
function letterGrade($score){
    if($score >= 90){
        return 'A';
    }else if ($score >= 80){
        return 'B';
    }else if($score >= 70){
        return 'D';
    }else{
        return 'F';
    }
}
