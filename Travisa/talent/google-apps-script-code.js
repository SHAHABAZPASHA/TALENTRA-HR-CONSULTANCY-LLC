// GOOGLE APPS SCRIPT CODE - PASTE THIS ENTIRE CODE

function doPost(e) {
  try {
    const sheet = SpreadsheetApp.getActiveSheet();
    const data = JSON.parse(e.postData.contents);
    
    // Add new row with form data
    sheet.appendRow([
      data.timestamp,
      data.name,
      data.email,
      data.portfolio,
      data.coverLetter,
      data.fileName,
      data.fileSize,
      data.jobPosition,
      data.jobLocation,
      data.privacyAgreed
    ]);
    
    return ContentService
      .createTextOutput('Success')
      .setMimeType(ContentService.MimeType.TEXT);
      
  } catch (error) {
    return ContentService
      .createTextOutput('Error: ' + error.toString())
      .setMimeType(ContentService.MimeType.TEXT);
  }
}