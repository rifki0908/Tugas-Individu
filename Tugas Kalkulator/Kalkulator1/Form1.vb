Public Class Form1
    Dim Angka1, Angka2 As Single
    Dim lambang As String
    Public value1, value2 As Long

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles B7.Click
        TextBox1.Text = TextBox1.Text + B7.Text
    End Sub

    Private Sub B1_Click(sender As Object, e As EventArgs) Handles B1.Click
        TextBox1.Text = TextBox1.Text + B1.Text
    End Sub

    Private Sub B0_Click(sender As Object, e As EventArgs) Handles B0.Click
        If TextBox1.Text = "" Then
            TextBox1.Text = ""
        Else
            TextBox1.Text = TextBox1.Text & 0
        End If
    End Sub

    Private Sub B2_Click(sender As Object, e As EventArgs) Handles B2.Click
        TextBox1.Text = TextBox1.Text + B2.Text
    End Sub

    Private Sub B3_Click(sender As Object, e As EventArgs) Handles B3.Click
        TextBox1.Text = TextBox1.Text + B3.Text
    End Sub

    Private Sub B4_Click(sender As Object, e As EventArgs) Handles B4.Click
        TextBox1.Text = TextBox1.Text + B4.Text
    End Sub

    Private Sub B5_Click(sender As Object, e As EventArgs) Handles B5.Click
        TextBox1.Text = TextBox1.Text + B5.Text
    End Sub

    Private Sub B6_Click(sender As Object, e As EventArgs) Handles B6.Click
        TextBox1.Text = TextBox1.Text + B6.Text
    End Sub

    Private Sub B8_Click(sender As Object, e As EventArgs) Handles B8.Click
        TextBox1.Text = TextBox1.Text + B8.Text
    End Sub

    Private Sub B9_Click(sender As Object, e As EventArgs) Handles B9.Click
        TextBox1.Text = TextBox1.Text + B9.Text
    End Sub

    Private Sub Btambah_Click(sender As Object, e As EventArgs) Handles Btambah.Click
        If TextBox1.Text = "" Then Exit Sub
        Angka1 = CSng(TextBox1.Text)
        lambang = "+"
        TextBox1.Clear()

    End Sub

    Private Sub Bkurang_Click(sender As Object, e As EventArgs) Handles Bkurang.Click
        If TextBox1.Text = "" Then Exit Sub
        Angka1 = CSng(TextBox1.Text)
        lambang = "-"
        TextBox1.Clear()
    End Sub

    Private Sub Bx_Click(sender As Object, e As EventArgs) Handles Bx.Click
        If TextBox1.Text = "" Then Exit Sub
        Angka1 = CSng(TextBox1.Text)
        lambang = "*"
        TextBox1.Clear()
    End Sub

    Private Sub Bbagi_Click(sender As Object, e As EventArgs) Handles Bbagi.Click
        If TextBox1.Text = "" Then Exit Sub
        Angka1 = CSng(TextBox1.Text)
        lambang = "/"
        TextBox1.Clear()
    End Sub

    Private Sub Bsamadengan_Click(sender As Object, e As EventArgs) Handles Bsamadengan.Click
        Dim hasil As Single
        Angka2 = CSng(TextBox1.Text)
        Select Case lambang
            Case "+"
                hasil = Angka1 + Angka2
            Case "-"
                hasil = Angka1 - Angka2
            Case "*"
                hasil = Angka1 * Angka2
            Case "/"
                hasil = Angka1 / Angka2
            Case "^"
                hasil = Angka1 ^ Angka2
        End Select
        TextBox1.Text = hasil
    End Sub

    Private Sub Bdel_Click(sender As Object, e As EventArgs) Handles Bdel.Click
        TextBox1.Text = ""
    End Sub

    Private Sub BKeluar_Click(sender As Object, e As EventArgs) Handles BKeluar.Click
        End
    End Sub

    Private Sub BPlusminus_Click(sender As Object, e As EventArgs) Handles BPlusminus.Click
        If TextBox1.Text = "" Then Exit Sub
        If Val(TextBox1.Text) > 0 Then
            TextBox1.Text = Val(TextBox1.Text) * -1
        Else
            TextBox1.Text = Val(TextBox1.Text) * -1
        End If
    End Sub

    Private Sub TextBox1_TextChanged(sender As Object, e As EventArgs) Handles TextBox1.TextChanged

    End Sub

    Private Sub Bkoma_Click(sender As Object, e As EventArgs) Handles Bpangkat.Click
        If TextBox1.Text = "" Then Exit Sub
        Angka1 = CSng(TextBox1.Text)
        lambang = "^"
        TextBox1.Clear()
    End Sub
End Class
