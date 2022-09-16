var m_counter = 1;
var m_speed = 100;

function Multiplier() { 
    if (m_counter < 11) {
        page_1.innerHTML += cont_page[m_counter];
        m_counter++;
        setTimeout(Multiplier, m_speed);
    }

    else if (m_counter > 10 &&  m_counter < 21){
        if (m_counter < cont_page.length) {
            page_2.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }

    else if (m_counter > 20 &&  m_counter < 31){
        if (m_counter < cont_page.length) {
            page_3.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }
    else if (m_counter > 30 &&  m_counter < 41){
        if (m_counter < cont_page.length) {
            page_4.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }
    else if (m_counter > 40 &&  m_counter < 51){
        if (m_counter < cont_page.length) {
            page_5.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }
    else if (m_counter > 50 &&  m_counter < 61){
        if (m_counter < cont_page.length) {
            page_6.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }
    else if (m_counter > 60 &&  m_counter < 71){
        if (m_counter < cont_page.length) {
            page_7.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }
    else if (m_counter > 70 &&  m_counter < 81){
        if (m_counter < cont_page.length) {
            page_8.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }
    else if (m_counter > 80 &&  m_counter < 91){
        if (m_counter < cont_page.length) {
            page_9.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }
    else if (m_counter > 90 &&  m_counter < 101){
        if (m_counter < cont_page.length) {
            page_10.innerHTML += cont_page[m_counter];
            m_counter++;
            setTimeout(Multiplier, m_speed);
        }
    }

}

Multiplier();
