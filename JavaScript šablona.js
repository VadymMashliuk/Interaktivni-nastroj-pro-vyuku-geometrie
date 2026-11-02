function vypocitat()
{
    const delkaStrany = Number(document.getElementById("delkaStrany").value);
    const plocha = delkaStrany ** 2;
    const obvod = delkaStrany * 4;
    const uhlopricka = delkaStrany * 1.41421;
    document.getElementById("plocha").textContent = plocha;
    document.getElementById("obvod").textContent = obvod;
    document.getElementById("uhlopricka").textContent = uhlopricka;
}