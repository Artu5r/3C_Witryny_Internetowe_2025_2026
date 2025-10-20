const ROWS = 10;
    const COLS = 10;
    let counter = 100;
    let matrix = [];

    for (let i = 0; i < ROWS; i++) {
      let row = [];
      for (let j = 0; j < COLS; j++) {
        row.push(counter);
        counter++; 
      }
      matrix.push(row);
    }

    let mainDiagonalSum = 0;
    let secondaryDiagonalSum = 0;
    for (let i = 0; i < ROWS; i++) {
      mainDiagonalSum += matrix[i][i];              
      secondaryDiagonalSum += matrix[i][COLS - 1 - i];
    }

    let tableHTML = '<table>';
    for (let i = 0; i < ROWS; i++) {
      tableHTML += '<tr>';
      for (let j = 0; j < COLS; j++) {
        tableHTML += '<td>' + matrix[i][j] + '</td>';
      }
      tableHTML += '</tr>';
    }
    tableHTML += '</table>';
    document.getElementById('matrixContainer').innerHTML = tableHTML;

    let resultsHTML = `<h3>Wyniki obliczeń:</h3>
                       <p>Przekątna główna: <strong>${mainDiagonalSum}</strong></p>
                       <p>Przekątna druga: <strong>${secondaryDiagonalSum}</strong></p>`;
    document.getElementById('results').innerHTML = resultsHTML;