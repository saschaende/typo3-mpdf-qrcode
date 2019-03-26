# mPDF QR code library for TYPO3

QR code generating library with HTML/PNG/mPDF output possibilities.

This is based on QrCode library bundled with mPDF until v8.0, made by Laurent Minguet. It is provided under LGPL license.

## Usage

    <?php

    use Mpdf\QrCode\QrCode;
    use Mpdf\QrCode\Output;

    $qrCode = new QrCode('Lorem ipsum sit dolor');

    $output = new Output\Png();

    // Save black on white PNG image 100px wide to filename.png
    $output->output($qrCode, 100, [255, 255, 255], [0, 0, 0], 'filename.png');