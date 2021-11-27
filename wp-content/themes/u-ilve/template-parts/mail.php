<?php
defined('ABSPATH') or die('Cannot access pages directly.');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
</head>

<body border="0" style="margin:0; padding:0; font-family: Arial, sans-serif;">
  <table border="0" cellpadding="0" cellspacing="0" style="margin:0; padding:0" width="100%">
    <tr>
      <td align="center">
        <center style="max-width: 600px; width: 100%;">
          <!--[if gte mso 9]>
          <table border="0" cellpadding="0" cellspacing="0" style="margin:0; padding:0"><tr><td>
          <![endif]-->
          <table border="0" cellpadding="0" cellspacing="0" style="margin:0; padding:0" width="100%">
            <tr>
              <td>
                <table border="0" cellpadding="0" cellspacing="0" style="padding: 65px 15px;">

                  <tr>
                    <td align="center">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                        <tr>
                          <td style="font-size: 16px; letter-spacing: 0.05em; line-height: 24px;">
                            Заявка с сайта 
                            <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>" style="color: #333333; font: 16px Arial, sans-serif; line-height: 24px; letter-spacing: 0.05em; -webkit-text-size-adjust:none;" target="_blank"><?php echo $_SERVER['SERVER_NAME']; ?></a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td align="center">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                        <?php if (@$additional['name']): ?>
                          <tr>
                            <td style="font-size: 35px; font-weight: 700; padding: 25px 0 0 0; line-height: 38px; word-break: break-word;">
                              <?php echo esc_html($additional['name']); ?>
                            </td>
                          </tr>
                        <?php endif; ?>
                        <tr>
                          <td style="padding: 15px 0 10px 0;">
                            <a href="tel:<?php echo preg_replace("/[^0-9+]/", "", esc_html($phone)); ?>" style="color: #bb00ff; font: 20px Arial, sans-serif; line-height: 24px; -webkit-text-size-adjust:none; display: block; text-decoration: none; word-break: break-word;" target="_blank"><?php echo $phone; ?></a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <?php if (!empty(@$additional['type'])): ?>
                    <tr>
                      <td align="center">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                          <tr>
                            <td style="padding: 20px 0 0 0; font-size: 14px;">
                              <span><?php echo $additional['type']; ?></span>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  <?php endif; ?>

                  <?php if (@$additional['more']): ?>
                    <tr>
                      <td align="center">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                          <tr>
                            <td style="padding: 30px 0 0 0; font-size: 14px; font-weight: 700;">
                              <span>Подробности:</span>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <?php foreach ($additional['more'] as $title => $list): ?>
                      <tr>
                        <td align="center">
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                            <tr>
                              <td style="padding: 20px 0 0 0; font-size: 14px;">
                                <span><?php echo $title; ?></span>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <?php foreach ($list as $item): ?>
                        <tr>
                          <td align="center">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                              <tr>
                                <td style="padding: 5px 0 0 0; font-size: 14px;">
                                  <span>• <?php echo $item; ?></span>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>

                  <tr>
                    <td align="center" style="padding: 42px 0 0 0;">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" bgcolor="#ff88ff">
                        <tr style="height: 5px;">
                        </tr>
                      </table>
                    </td>
                  </tr>

                </table>
              </td>
            </tr>
          </table>
          <!--[if gte mso 9]>
          </td></tr></table>
          <![endif]-->
        </center>
      </td>
    </tr>
  </table>
</body>

</html>