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
function vypocitatKruh()
{
    const polomer = Number(document.getElementById("polomer").value);
    const plochaKruhu = 3.14159 * polomer ** 2;
    const delkaKruhu = 2 * 3.14159 * polomer;
    const prumerKruhu = 2 * polomer;
    document.getElementById("plochaKruhu").textContent = plochaKruhu;
    document.getElementById("delkaKruhu").textContent = delkaKruhu;
    document.getElementById("prumerKruhu").textContent = prumerKruhu;
}
function vypocitatLichobeznik()
{
    const delkaVetsiZakladny = Number(document.getElementById("delkaVetsiZakladny").value);
    const delkaMensiZakladny = Number(document.getElementById("delkaMensiZakladny").value);
    const delkaRamena = Number(document.getElementById("delkaRamena").value);
    const m = (delkaVetsiZakladny + delkaMensiZakladny) / 2;
    const h = Math.sqrt(delkaRamena ** 2 - ((delkaVetsiZakladny - delkaMensiZakladny) / 2) ** 2);
    const plochaLichobezniku = m * h;
    const obvodLichobezniku = delkaVetsiZakladny + delkaMensiZakladny + delkaRamena * 2;
    document.getElementById("plochaLichobezniku").textContent = plochaLichobezniku;
    document.getElementById("obvodLichobezniku").textContent = obvodLichobezniku;
}
function vypocitatRovnobeznik()
{
    const delkaPrvniStrany = Number(document.getElementById("delkaPrvniStrany").value);
    const delkaDruheStrany = Number(document.getElementById("delkaDruheStrany").value);
    const uhelMeziStranami = Number(document.getElementById("uhelMeziStranami").value);
    const plochaRovnobezniku = delkaPrvniStrany * delkaDruheStrany * Math.sin(uhelMeziStranami);
    const obvodRovnobezniku = delkaPrvniStrany * 2 + delkaDruheStrany * 2;
    const prvniUhloprickaRovnobezniku = Math.sqrt(delkaPrvniStrany ** 2 + delkaDruheStrany ** 2 + 2 * delkaPrvniStrany * delkaDruheStrany * Math.cos(uhelMeziStranami));
    const druhaUhloprickaRovnobezniku = Math.sqrt(delkaPrvniStrany ** 2 + delkaDruheStrany ** 2 - 2 * delkaPrvniStrany * delkaDruheStrany * Math.cos(uhelMeziStranami));
    document.getElementById("plochaRovnobezniku").textContent = plochaRovnobezniku;
    document.getElementById("obvodRovnobezniku").textContent = obvodRovnobezniku;
    document.getElementById("prvniUhloprickaRovnobezniku").textContent = prvniUhloprickaRovnobezniku;
    document.getElementById("druhaUhloprickaRovnobezniku").textContent = druhaUhloprickaRovnobezniku;
}