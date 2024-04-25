var znachenie = [25000000, 25000000, 4000000, 4000000, 12500000, 12500000, 25000000, 25000000, 2500000, 1000000, 18000000, 8000000, 0, 20000000, 30000000, 5000000, 4000000, 300000, 300000, 10000000, 10000000, 20000000, 20000000, 300000, 300000, 450000, 650000, 350000, 450000, 65000, 65000, 65000, 65000, 150000, 150000, 150000, 0, 0, 0, 350000, 350000, 500000, 4000000, 0, 0, 0, 0, 0, 1000000, 1000000, 3000000, 3000000, 3000000, 3000000, 11000000];
var limit = 75000000;
var getId = [];
var getIdSp = [];
var arr = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var flag = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var summa = 0;
var nodostupLim = "nodostupLim";
var nodostupSum = "nodostupSum";
var nodostupNull = "nodostupNull";
var userId1;
var userId2;
var userId3;
var userId4;
var userId5;
var userId6;
var userId7;
var userId8;
var userId9;
var userId10;
var userId11;
var userId12;
var in_flag = [];
var nul = 0;

window.onload = function() {
  document.getElementById('okno').style.display = "";
  butt_okno.onclick = function() {
    document.getElementById('okno').style.display = "none";
  }

  butt.onclick = function() {
    nul = 0;
    userId1 = document.getElementById("fio").value;
    userId2 = document.getElementById("in_sf_rd1");
    userId3 = document.getElementById("in_sf_rd2");
    userId4 = document.getElementById("in_sf_rd3");
    userId5 = document.getElementById("in_sf_rd4");
    userId6 = document.getElementById("in_sf_rd5");
    userId7 = document.getElementById("in_sf_rd6");
    userId8 = document.getElementById("godRojd").value;
    userId9 = document.getElementById("in_gd_rd1");
    userId10 = document.getElementById("in_gd_rd2");
    userId11 = document.getElementById("in_gd_rd3");
    userId12 = document.getElementById("coment").value;

    if(userId1 == "<empty string>") nul = 1;
    if(userId8 == "<empty string>") nul = 1;
    
    if(userId2.checked) {
      in_flag[0] = 1;
      in_flag[1] = 0;
      in_flag[2] = 0;
      in_flag[3] = 0;
      in_flag[4] = 0;
      in_flag[5] = 0;
    } else if(userId3.checked) {
      in_flag[0] = 0;
      in_flag[1] = 1;
      in_flag[2] = 0;
      in_flag[3] = 0;
      in_flag[4] = 0;
      in_flag[5] = 0;
    } else if(userId4.checked) {
      in_flag[0] = 0;
      in_flag[1] = 0;
      in_flag[2] = 1;
      in_flag[3] = 0;
      in_flag[4] = 0;
      in_flag[5] = 0;
    } else if(userId5.checked) {
      in_flag[0] = 0;
      in_flag[1] = 0;
      in_flag[2] = 0;
      in_flag[3] = 1;
      in_flag[4] = 0;
      in_flag[5] = 0;
    } else if(userId6.checked) {
      in_flag[0] = 0;
      in_flag[1] = 0;
      in_flag[2] = 0;
      in_flag[3] = 0;
      in_flag[4] = 1;
      in_flag[5] = 0;
    } else if(userId7.checked) {
      in_flag[0] = 0;
      in_flag[1] = 0;
      in_flag[2] = 0;
      in_flag[3] = 0;
      in_flag[4] = 0;
      in_flag[5] = 1;
    } else {
      nul = 1;
    }

    if(userId9.checked) {
      in_flag[6] = 1;
      in_flag[7] = 0;
      in_flag[8] = 0;
    } else if(userId10.checked) {
      in_flag[6] = 0;
      in_flag[7] = 1;
      in_flag[8] = 0;
    } else if(userId11.checked) {
      in_flag[6] = 0;
      in_flag[7] = 0;
      in_flag[8] = 1;
    } else {
      nul = 1;
    }

    if(nul == 0) {

      summa = 0;
      getId[0] = document.getElementById("flag1");
      if (getId[0].checked) {
      flag[0] = 1;
      } else {
        flag[0] = 0;
      };
      getId[1] = document.getElementById("flag2");
      if (getId[1].checked) {
      flag[1] = 1;
      } else {
        flag[1] = 0;
      };
      getId[2] = document.getElementById("flag3");
      if (getId[2].checked) {
      flag[2] = 1;
      } else {
        flag[2] = 0;
      };
      getId[3] = document.getElementById("flag4");
      if (getId[3].checked) {
      flag[3] = 1;
      } else {
        flag[3] = 0;
      };
      getId[4] = document.getElementById("flag5");
      if (getId[4].checked) {
      flag[4] = 1;
      } else {
        flag[4] = 0;
      };
      getId[5] = document.getElementById("flag6");
      if (getId[5].checked) {
      flag[5] = 1;
      } else {
        flag[5] = 0;
      };
      getId[6] = document.getElementById("flag7");
      if (getId[6].checked) {
      flag[6] = 1;
      } else {
        flag[6] = 0;
      };
      getId[7] = document.getElementById("flag8");
      if (getId[7].checked) {
      flag[7] = 1;
      } else {
        flag[7] = 0;
      };
      getId[8] = document.getElementById("flag9");
      if (getId[8].checked) {
      flag[8] = 1;
      } else {
        flag[8] = 0;
      };
      getId[9] = document.getElementById("flag10");
      if (getId[9].checked) {
      flag[9] = 1;
      } else {
        flag[9] = 0;
      };
      getId[10] = document.getElementById("flag11");
      if (getId[10].checked) {
      flag[10] = 1;
      } else {
        flag[10] = 0;
      };
      getId[11] = document.getElementById("flag12");
      if (getId[11].checked) {
      flag[11] = 1;
      } else {
        flag[11] = 0;
      };
      getId[12] = document.getElementById("flag13");
      if (getId[12].checked) {
      flag[12] = 1;
      } else {
        flag[12] = 0;
      };
      getId[13] = document.getElementById("flag14");
      if (getId[13].checked) {
      flag[13] = 1;
      } else {
        flag[13] = 0;
      };
      getId[14] = document.getElementById("flag15");
      if (getId[14].checked) {
      flag[14] = 1;
      } else {
        flag[14] = 0;
      };
      getId[15] = document.getElementById("flag16");
      if (getId[15].checked) {
      flag[15] = 1;
      } else {
        flag[15] = 0;
      };
      getId[16] = document.getElementById("flag17");
      if (getId[16].checked) {
      flag[16] = 1;
      } else {
        flag[16] = 0;
      };
      getId[17] = document.getElementById("flag18");
      if (getId[17].checked) {
      flag[17] = 1;
      } else {
        flag[17] = 0;
      };
      getId[18] = document.getElementById("flag19");
      if (getId[18].checked) {
      flag[18] = 1;
      } else {
        flag[18] = 0;
      };
      getId[19] = document.getElementById("flag20");
      if (getId[19].checked) {
      flag[19] = 1;
      } else {
        flag[19] = 0;
      };
      console.log(flag);
  
      if(flag[0] == 1) {
        getIdSp[0] = document.getElementById("color-46");
        getIdSp[1] = document.getElementById("color-47");
        if(getIdSp[0].checked) {
          summa = summa + znachenie[0];
          arr[0] = 1;
          arr[1] = 0;
        }
        if(getIdSp[1].checked) {
          summa = summa + znachenie[1];
          arr[1] = 1;
          arr[0] = 0;
        }
      } else {
        arr[0] = 0;
        arr[1] = 0;
      }
      if(flag[1] == 1) {
        getIdSp[2] = document.getElementById("checkbox_spage");
        getIdSp[3] = document.getElementById("color-2");
        if(getIdSp[2].checked) {
          summa = summa + znachenie[2];
          arr[2] = 1;
          arr[3] = 0;
        }
        if(getIdSp[3].checked) {
          summa = summa + znachenie[3];
          arr[3] = 1;
          arr[2] = 0;
        }
      } else {
        arr[2] = 0;
        arr[3] = 0;
      }
      if(flag[2] == 1) {
        getIdSp[4] = document.getElementById("color-3");
        getIdSp[5] = document.getElementById("color-4");
        if(getIdSp[4].checked) {
          summa = summa + znachenie[4];
          arr[4] = 1;
          arr[5] = 0;
        }
        if(getIdSp[5].checked) {
          summa = summa + znachenie[5];
          arr[5] = 1;
          arr[4] = 0;
        }
      } else {
        arr[4] = 0;
        arr[5] = 0;
      }
      if(flag[3] == 1) {
        getIdSp[6] = document.getElementById("color-5");
        getIdSp[7] = document.getElementById("color-6");
        if(getIdSp[6].checked) {
          summa = summa + znachenie[6];
          arr[6] = 1;
          arr[7] = 0;
        }
        if(getIdSp[7].checked) {
          summa = summa + znachenie[7];
          arr[7] = 1;
          arr[6] = 0;
        }
      } else {
        arr[6] = 0;
        arr[7] = 0;
      }
      if(flag[4] == 1) {
        getIdSp[8] = document.getElementById("color-7");
        getIdSp[9] = document.getElementById("color-8");
        if(getIdSp[8].checked) {
          summa = summa + znachenie[8];
          arr[8] = 1;
          arr[9] = 0;
        }
        if(getIdSp[9].checked) {
          summa = summa + znachenie[9];
          arr[9] = 1;
          arr[8] = 0;
        }
      } else {
        arr[8] = 0;
        arr[9] = 0;
      }
      if(flag[5] == 1) {
        getIdSp[10] = document.getElementById("color-9");
        getIdSp[11] = document.getElementById("color-10");
        getIdSp[12] = document.getElementById("color-11");
        if(getIdSp[10].checked) {
          summa = summa + znachenie[10];
          arr[10] = 1;
          arr[11] = 0;
          arr[12] = 0;
        }
        if(getIdSp[11].checked) {
          summa = summa + znachenie[11];
          arr[11] = 1;
          arr[10] = 0;
          arr[12] = 0;
        }
        if(getIdSp[12].checked) {
          summa = summa + znachenie[12];
          arr[12] = 1;
          arr[10] = 0;
          arr[11] = 0;
        }
      } else {
        arr[10] = 0;
        arr[11] = 0;
        arr[12] = 0;
      }
      if(flag[6] == 1) {
        getIdSp[13] = document.getElementById("color-12");
        getIdSp[14] = document.getElementById("color-43");
        getIdSp[15] = document.getElementById("color-44");
        getIdSp[16] = document.getElementById("color-42");
        if(getIdSp[13].checked) {
          summa = summa + znachenie[13];
          arr[13] = 1;
          arr[14] = 0;
          arr[15] = 0;
          arr[16] = 0;
        }
        if(getIdSp[14].checked) {
          summa = summa + znachenie[14];
          arr[14] = 1;
          arr[13] = 0;
          arr[15] = 0;
          arr[16] = 0;
        }
        if(getIdSp[15].checked) {
          summa = summa + znachenie[15];
          arr[15] = 1;
          arr[13] = 0;
          arr[14] = 0;
          arr[16] = 0;
        }
        if(getIdSp[16].checked) {
          summa = summa + znachenie[16];
          arr[16] = 1;
          arr[13] = 0;
          arr[14] = 0;
          arr[15] = 0;
        }
      } else {
        arr[13] = 0;
        arr[14] = 0;
        arr[15] = 0;
        arr[16] = 0;
      }
      if(flag[7] == 1) {
        getIdSp[17] = document.getElementById("color-13");
        getIdSp[18] = document.getElementById("color-14");
        if(getIdSp[17].checked) {
          summa = summa + znachenie[17];
          arr[17] = 1;
          arr[18] = 0;
        }
        if(getIdSp[18].checked) {
          summa = summa + znachenie[18];
          arr[18] = 1;
          arr[17] = 0;
        }
      } else {
        arr[17] = 0;
        arr[18] = 0;
      }
      if(flag[8] == 1) {
        getIdSp[19] = document.getElementById("color-15");
        getIdSp[20] = document.getElementById("color-16");
        if(getIdSp[19].checked) {
          summa = summa + znachenie[19];
          arr[19] = 1;
          arr[20] = 0;
        }
        if(getIdSp[20].checked) {
          summa = summa + znachenie[20];
          arr[20] = 1;
          arr[19] = 0;
        }
      } else {
        arr[19] = 0;
        arr[20] = 0;
      }
      if(flag[9] == 1) {
        getIdSp[21] = document.getElementById("color-48");
        getIdSp[22] = document.getElementById("color-49");
        if(getIdSp[21].checked) {
          summa = summa + znachenie[21];
          arr[21] = 1;
          arr[22] = 0;
        }
        if(getIdSp[22].checked) {
          summa = summa + znachenie[22];
          arr[22] = 1;
          arr[21] = 0;
        }
      } else {
        arr[21] = 0;
        arr[22] = 0;
      }
      if(flag[10] == 1) {
        getIdSp[23] = document.getElementById("color-24");
        getIdSp[24] = document.getElementById("color-25");
        getIdSp[25] = document.getElementById("color-26");
        getIdSp[26] = document.getElementById("color-27");
        getIdSp[27] = document.getElementById("color-28");
        getIdSp[28] = document.getElementById("color-29");
        if(getIdSp[23].checked) {
          summa = summa + znachenie[23];
          arr[23] = 1;
          arr[24] = 0;
          arr[25] = 0;
          arr[26] = 0;
          arr[27] = 0;
          arr[28] = 0;
        }
        if(getIdSp[24].checked) {
          summa = summa + znachenie[24];
          arr[24] = 1;
          arr[23] = 0;
          arr[25] = 0;
          arr[26] = 0;
          arr[27] = 0;
          arr[28] = 0;
        }
        if(getIdSp[25].checked) {
          summa = summa + znachenie[25];
          arr[25] = 1;
          arr[23] = 0;
          arr[24] = 0;
          arr[26] = 0;
          arr[27] = 0;
          arr[28] = 0;
        }
        if(getIdSp[26].checked) {
          summa = summa + znachenie[26];
          arr[26] = 1;
          arr[23] = 0;
          arr[24] = 0;
          arr[25] = 0;
          arr[27] = 0;
          arr[28] = 0;
        }
        if(getIdSp[27].checked) {
          summa = summa + znachenie[27];
          arr[27] = 1;
          arr[23] = 0;
          arr[24] = 0;
          arr[25] = 0;
          arr[26] = 0;
          arr[28] = 0;
        }
        if(getIdSp[28].checked) {
          summa = summa + znachenie[28];
          arr[28] = 1;
          arr[23] = 0;
          arr[24] = 0;
          arr[25] = 0;
          arr[26] = 0;
          arr[27] = 0;
        }
      } else {
        arr[23] = 0;
        arr[24] = 0;
        arr[25] = 0;
        arr[26] = 0;
        arr[27] = 0;
        arr[28] = 0;
      }
      if(flag[11] == 1) {
        getIdSp[29] = document.getElementById("color-17");
        getIdSp[31] = document.getElementById("color-18");
        getIdSp[32] = document.getElementById("color-19");
        getIdSp[33] = document.getElementById("color-20");
        if(getIdSp[29].checked) {
          summa = summa + znachenie[29];
          arr[29] = 1;
          arr[30] = 0;
          arr[31] = 0;
          arr[32] = 0;
        }
        if(getIdSp[31].checked) {
          summa = summa + znachenie[30];
          arr[30] = 1;
          arr[29] = 0;
          arr[31] = 0;
          arr[32] = 0;
        }
        if(getIdSp[32].checked) {
          summa = summa + znachenie[31];
          arr[31] = 1;
          arr[29] = 0;
          arr[30] = 0;
          arr[32] = 0;
        }
        if(getIdSp[33].checked) {
          summa = summa + znachenie[32];
          arr[32] = 1;
          arr[29] = 0;
          arr[30] = 0;
          arr[31] = 0;
        }
      } else {
        arr[29] = 0;
        arr[30] = 0;
        arr[31] = 0;
        arr[32] = 0;
      }
      if(flag[12] == 1) {
        getIdSp[34] = document.getElementById("color-21");
        getIdSp[35] = document.getElementById("color-22");
        getIdSp[36] = document.getElementById("color-23");
        if(getIdSp[34].checked) {
          summa = summa + znachenie[33];
          arr[33] = 1;
          arr[34] = 0;
          arr[35] = 0;
        }
        if(getIdSp[35].checked) {
          summa = summa + znachenie[34];
          arr[34] = 1;
          arr[33] = 0;
          arr[35] = 0;
        }
        if(getIdSp[36].checked) {
          summa = summa + znachenie[35];
          arr[35] = 1;
          arr[33] = 0;
          arr[34] = 0;
        }
      } else {
        arr[33] = 0;
        arr[34] = 0;
        arr[35] = 0;
      }
      if(flag[13] == 1) {
        getIdSp[37] = document.getElementById("color-30");
        getIdSp[38] = document.getElementById("color-31");
        getIdSp[39] = document.getElementById("color-32");
        if(getIdSp[37].checked) {
          summa = summa + znachenie[36];
          arr[36] = 1;
          arr[37] = 0;
          arr[38] = 0;
        }
        if(getIdSp[38].checked) {
          summa = summa + znachenie[37];
          arr[37] = 1;
          arr[36] = 0;
          arr[38] = 0;
        }
        if(getIdSp[39].checked) {
          summa = summa + znachenie[38];
          arr[38] = 1;
          arr[36] = 0;
          arr[37] = 0;
        }
      } else {
        arr[36] = 0;
        arr[37] = 0;
        arr[38] = 0;
      }
      if(flag[14] == 1) {
        getIdSp[40] = document.getElementById("color-50");
        getIdSp[41] = document.getElementById("color-51");
        if(getIdSp[40].checked) {
          summa = summa + znachenie[39];
          arr[39] = 1;
          arr[40] = 0;
        }
        if(getIdSp[41].checked) {
          summa = summa + znachenie[40];
          arr[40] = 1;
          arr[39] = 0;
        }
      } else {
        arr[39] = 0;
        arr[40] = 0;
      }
      if(flag[15] == 1) {
        getIdSp[42] = document.getElementById("color-33");
        getIdSp[43] = document.getElementById("color-34");
        if(getIdSp[42].checked) {
          summa = summa + znachenie[41];
          arr[41] = 1;
          arr[42] = 0;
        }
        if(getIdSp[43].checked) {
          summa = summa + znachenie[42];
          arr[42] = 1;
          arr[41] = 0;
        }
      } else {
        arr[41] = 0;
        arr[42] = 0;
      }
      if(flag[16] == 1) {
        getIdSp[44] = document.getElementById("color-35");
        getIdSp[45] = document.getElementById("color-36");
        getIdSp[46] = document.getElementById("color-37");
        getIdSp[47] = document.getElementById("color-38");
        getIdSp[48] = document.getElementById("color-39");
        if(getIdSp[44].checked) {
          summa = summa + znachenie[43];
          arr[43] = 1;
          arr[44] = 0;
          arr[45] = 0;
          arr[46] = 0;
          arr[47] = 0;
        }
        if(getIdSp[45].checked) {
          summa = summa + znachenie[44];
          arr[44] = 1;
          arr[43] = 0;
          arr[45] = 0;
          arr[46] = 0;
          arr[47] = 0;
        }
        if(getIdSp[46].checked) {
          summa = summa + znachenie[45];
          arr[45] = 1;
          arr[43] = 0;
          arr[44] = 0;
          arr[46] = 0;
          arr[47] = 0;
        }
        if(getIdSp[47].checked) {
          summa = summa + znachenie[46];
          arr[46] = 1;
          arr[43] = 0;
          arr[44] = 0;
          arr[45] = 0;
          arr[47] = 0;
        }
        if(getIdSp[48].checked) {
          summa = summa + znachenie[47];
          arr[47] = 1;
          arr[43] = 0;
          arr[44] = 0;
          arr[45] = 0;
          arr[46] = 0;
        }
      } else {
        arr[43] = 0;
        arr[44] = 0;
        arr[45] = 0;
        arr[46] = 0;
        arr[47] = 0;
      }
      if(flag[17] == 1) {
        getIdSp[49] = document.getElementById("color-40");
        getIdSp[50] = document.getElementById("color-41");
        if(getIdSp[49].checked) {
          summa = summa + znachenie[48];
          arr[48] = 1;
          arr[49] = 0;
        }
        if(getIdSp[50].checked) {
          summa = summa + znachenie[49];
          arr[49] = 1;
          arr[48] = 0;
        }
      } else {
        arr[48] = 0;
        arr[49] = 0;
      }
      if(flag[18] == 1) {
        getIdSp[51] = document.getElementById("color-45");
        getIdSp[52] = document.getElementById("color-46");
        getIdSp[53] = document.getElementById("color-47");
        getIdSp[54] = document.getElementById("color-48");
        if(getIdSp[51].checked) {
          summa = summa + znachenie[50];
          arr[50] = 1;
          arr[51] = 0;
          arr[52] = 0;
          arr[53] = 0;
        }
        if(getIdSp[52].checked) {
          summa = summa + znachenie[51];
          arr[51] = 1;
          arr[50] = 0;
          arr[52] = 0;
          arr[53] = 0;
        }
        if(getIdSp[53].checked) {
          summa = summa + znachenie[52];
          arr[52] = 1;
          arr[50] = 0;
          arr[51] = 0;
          arr[53] = 0;
        }
        if(getIdSp[54].checked) {
          summa = summa + znachenie[53];
          arr[53] = 1;
          arr[50] = 0;
          arr[51] = 0;
          arr[52] = 0;
        }
      } else {
        arr[50] = 0;
        arr[51] = 0;
        arr[52] = 0;
        arr[53] = 0;
      }
      if(flag[19] == 1) {
        getIdSp[55] = document.getElementById("color-52");
        if(getIdSp[55].checked) {
          summa = summa + znachenie[54];
          arr[54] = 1;
        }
      } else {
        arr[54] = 0;
      }
      console.log(summa);
    
      if(summa >= limit) {
        writeCookie('test_var', nodostupLim, 30);
        function writeCookie(name, val, expires) {
          var date = new Date;
          date.setDate(date.getDate() + expires);
          document.cookie = name+"="+val+"; path=/; expires=" + date.toUTCString();
        }
      } else if(summa != 0) {
        writeCookie('test_var', arr, 30);
        writeCookie('test_flag', flag, 30);
        writeCookie('in_flag', in_flag, 30);
        writeCookie('userId1', userId1, 30);
        writeCookie('userId8', userId8, 30);
        writeCookie('userId12', userId12, 30);
        function writeCookie(name, val, expires) {
          var date = new Date;
          date.setDate(date.getDate() + expires);
          document.cookie = name+"="+val+"; path=/; expires=" + date.toUTCString();
        }
      } else if(summa == 0) {
        writeCookie('test_var', nodostupSum, 30);
        function writeCookie(name, val, expires) {
          var date = new Date;
          date.setDate(date.getDate() + expires);
          document.cookie = name+"="+val+"; path=/; expires=" + date.toUTCString();
        }
      }
    } else if(nul == 1) {
      writeCookie('test_var', nodostupNull, 30);
      function writeCookie(name, val, expires) {
        var date = new Date;
        date.setDate(date.getDate() + expires);
        document.cookie = name+"="+val+"; path=/; expires=" + date.toUTCString();
      }
    }
  }
}
