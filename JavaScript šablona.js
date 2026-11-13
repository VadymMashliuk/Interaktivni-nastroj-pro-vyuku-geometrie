function vypocitatCtverec()
{
    const delkaStrany = Number(document.getElementById("delkaStrany").value);
    const plochaCtverce = delkaStrany ** 2;
    const obvodCtverce = delkaStrany * 4;
    const uhloprickaCtverce = delkaStrany * 1.41421;
    document.getElementById("plochaCtverce").textContent = plochaCtverce;
    document.getElementById("obvodCtverce").textContent = obvodCtverce;
    document.getElementById("uhloprickaCtverce").textContent = uhloprickaCtverce;
}
function vypocitatObdelnik()
{
    const delkaStrany = Number(document.getElementById("delkaStrany").value);
    const sirkaStrany = Number(document.getElementById("sirkaStrany").value);
    const plochaObdelniku = delkaStrany * sirkaStrany;
    document.getElementById("plochaObdelniku").textContent = plochaObdelniku;
}