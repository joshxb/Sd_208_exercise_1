var m_counter = 1;
var m_speed = 150;

function Multiplier() { 
    if (m_counter < cont_page.length) {
        page_1.innerHTML += cont_page[m_counter];
        m_counter++;
        setTimeout(Writer, m_speed);
    }

}

page_1.innerHTML = "WRITE";