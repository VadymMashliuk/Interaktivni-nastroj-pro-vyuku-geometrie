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
    const obvodObdelniku = 2 * delkaStrany + 2 * sirkaStrany;
    const uhloprickaObdelniku = Math.sqrt(delkaStrany ** 2 + sirkaStrany ** 2);
    document.getElementById("plochaObdelniku").textContent = plochaObdelniku;
    document.getElementById("obvodObdelniku").textContent = obvodObdelniku;
    document.getElementById("uhloprickaObdelniku").textContent = uhloprickaObdelniku;
}