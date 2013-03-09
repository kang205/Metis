function t()
{
    if (Math.random()>0.5) return '<img src="white.png"></img>';
    else return '<img src="black.png"></img>';
}
$("document").ready(function()
{
    var s="";
    for (var i=0;i<9;i++)
    {
        s+="<tr>";
        for (var j=0;j<9;j++)
            s+="<td>"+t()+"</td>";
        s+="</tr>";
    }
    $("#tb").append(s);
}
);