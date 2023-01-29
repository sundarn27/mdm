function toggle()
{
    let x = document.getElementById("nav-foot-a")


    if(x.style.display === "none" )
    {
        x.style.display = "block"
        x.style.transition = "top 0.1s"
    }
    else
    {
        x.style.display = "block"
        x.style.transition = "bottom 0.1s"
    }
}
